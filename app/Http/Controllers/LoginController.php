<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $nomor_hp = $request->nomor_hp;
        $password = $request->password;
        $credentials = $request->validate([
            'nomor_hp' => 'required',
            'password' => 'required'
        ]);
        // dd($nomor_hp, $password);
        if(Auth::attempt($credentials)) {
            $resultname = DB::select('select id_user from users where nomor_hp = ?', [$nomor_hp]);
            $nameUser= $resultname[0]->id_user;
            $request->session()->put('nama',$nameUser);
            $result = DB::select('select id_role from users where nomor_hp = ?', [$nomor_hp]);
            $roleUser = $result[0]->id_role;
            // dd($roleUser);
            if($roleUser == "role0001"){
                return redirect()-> intended('adminView');
            }
            else if($roleUser == "role0002"){
                return redirect()-> intended('bankView');
            }
            else if($roleUser == "role0003"){
                return redirect()-> intended('approverView');
            }
            else if($roleUser == "role0004"){
                return redirect()-> intended('marketingView');
            }
            
        }
        

        return back()-> with('loginError','Login failed!');

    }


    // view masing masing role
    public function adminView(Request $request)
    {
        if($request->session()->has('nama')){
            $namaLogin = $request->session()->get('nama');
		}else{
			echo 'Tidak ada data dalam session.';
		}
        return view('adminView/adminDashboard');
    }
    public function marketingView(Request $request)
    {
        // if($request->session()->has('nama')){
        //     $namaLogin = $request->session()->get('nama');
		// }else{
		// 	echo 'Tidak ada data dalam session.';
		// }
        return view('marketingView/marketingDashboard');
    }



}
