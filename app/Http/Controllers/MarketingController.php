<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class MarketingController extends Controller
{

    public function marketingAddCustomerView(Request $request)
    {
        return view('marketingView/addCustomerView');
    }
    public function addCustomer(Request $request)
    {
        $nomor_hp = $request->nomor_hp;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $kota = $request->kota;

       
        // if($request->session()->has('nama')){
		//     dd($request->session()->get('nama'));
		// }else{
		// 	echo 'Tidak ada data dalam session.';
		// }
        
        $rules = [
            'nomor_hp' => 'required|min:11|max:13',
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required'
        ];
        
        $temp = Customer::all()->count();
        $temp2 = $temp + 1;
        $kode = "user" . str_pad($temp2, 4, "0", STR_PAD_LEFT);
        $customer = new Customer();
        $customer->id_customer = $kode;
        $customer->nomor_hp = $request->nomor_hp;
        $customer->id_user = $request->session()->get('nama');
        $customer->nama_customer = $request->nama;
        $customer->alamat_customer = $request->alamat;
        $customer->poin_customer = 0;  
        $customer->kota = $request->kota;  
        $customer->save();

        // return redirect('adminAddUser');
        return view('marketingView/addCustomerView');
    }
}
