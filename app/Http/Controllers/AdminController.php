<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Bank;
use App\Models\Setting;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function addUser(Request $request)
    {
        $nomor_hp = $request->nomor_hp;
        $password = $request->password;
        $nama = $request->nama;
        $role = $request->role;
        $id_role = "";
        if ($role == "admin"){
            $id_role = "role0001";
        }
        else if ($role == "bank"){
            $id_role = "role0002";
        }
        else if ($role == "approver"){
            $id_role = "role0003";
        }
        else if ($role == "marketing"){
            $id_role = "role0004";
        }
        $result = DB::select('select id_role from role where nama_role = ?', [$nomor_hp]);
        $rules = [
            'nomor_hp' => 'required|min:11|max:13',
            'password' => 'required|min:6|max:6',
            'nama' => 'required',
            'role' => 'required'
        ];
        $temp = Users::all()->count();
        $temp2 = $temp + 1;
        $kode = "user" . str_pad($temp2, 4, "0", STR_PAD_LEFT);
        $user = new Users();
        $user->id_user = $kode;
        $user->nomor_hp = $request->nomor_hp;
        $user->password = Hash::make($request->password);
        $user->name = $request->nama;
        $user->id_role = $id_role;    
        $user->save();

        return redirect('adminAddUser');
    }

    public function generateVoucher(Request $request)
    {
        $n = 20;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
        
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
        $rules = [
            'nama_voucher' => 'required',
            'nilai_voucher' => 'required',
            'masa_berlaku' => 'required'
        ];
        // $this->validate($request,$rules);
        
        
        $temp = Voucher::all()->count();
        $temp2 = $temp + 1;
        $kode = "voucher" . str_pad($temp2, 4, "0", STR_PAD_LEFT).$randomString;
        $voucher = new Voucher();
        $voucher->id_voucher = $kode;
        $voucher->nama_voucher = $request->nama_voucher;
        $voucher->nilai_voucher = $request->nilai_voucher;
        $voucher->masa_berlaku = $request->masa_berlaku;
        $voucher->save();

        return redirect('adminGenerateVoucher');
    }
    public function adminAddUserView(Request $request)
    {
        return view('adminView/addUser');
    }




    //Admin Transaction


    public function addPoint(Request $request)
    {
        $nomor_hp = $request->nomor_hp;
        $password = $request->password;
        $nama = $request->nama;
        $role = $request->role;
        $id_role = "";
        if ($role == "admin"){
            $id_role = "role0001";
        }
        else if ($role == "bank"){
            $id_role = "role0002";
        }
        else if ($role == "approver"){
            $id_role = "role0003";
        }
        else if ($role == "marketing"){
            $id_role = "role0004";
        }
        $result = DB::select('select id_role from role where nama_role = ?', [$nomor_hp]);
        $rules = [
            'nomor_hp' => 'required|min:11|max:13',
            'password' => 'required|min:6|max:6',
            'nama' => 'required',
            'role' => 'required'
        ];
        $temp = Users::all()->count();
        $temp2 = $temp + 1;
        $kode = "user" . str_pad($temp2, 4, "0", STR_PAD_LEFT);
        $user = new Users();
        $user->id_user = $kode;
        $user->nomor_hp = $request->nomor_hp;
        $user->password = Hash::make($request->password);
        $user->name = $request->nama;
        $user->id_role = $id_role;    
        $user->save();

        return redirect('adminAddUser');
    }




    //add bank

    public function addBank(Request $request)
    {
        $nomor_rekening = $request->nomor_rekening;
        $nama_bank = $request->nama_bank;
        $bank = new Bank();
        $bank->nomor_rekening = $nomor_rekening;
        $bank->nama_bank = $nama_bank;
        $bank->status = 1;
        $bank->save();

        return view('adminAddBank');
    }


    //setting
    public function konversiPoin(Request $request)
    {
        $konversi = $request->konversi;
        $resultSetting = DB::select('select konversi from setting');
        $konversiDB= $resultSetting[0]-> konversi;
        Setting::where('konversi', $konversiDB)->update(['konversi'=>$konversi]);

        return redirect('setting');
    }
}
