<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Roles;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class UserController extends Controller
{
    
    public function adminAddUserView(Request $request)
    {
        return view('adminView/addUser');
    }
    public function addCustomerView(Request $request)
    {
        return view('marketingView/addCustomer');
    }
    public function adminAddPointView(Request $request)
    {
        $resultBank = Bank::all();
        return view('adminView/transaction/addPoin', ['bank' => $resultBank]);
    }
    public function adminGenerateVoucherView(Request $request)
    {
        return view('adminView/generateVoucher');
    }
    public function adminListUserView(Request $request)
    {
        $resultUser = DB::table('users')->select('users.name','users.nomor_hp','users.password','role.nama_role')->join('role','role.id_role','=','users.id_role')->get();
        
        return view('adminView/listUser',['users'=>$resultUser]);
    }

    public function adminListBankView(Request $request)
    {
        $resultBank = Bank::all();
        
        return view('adminView/listBank',['bank'=>$resultBank]);
    }

    public function LoginView(Request $request)
    {
        return view('login');
    }
    public function adminAddBankView(Request $request)
    {
        return view('adminView/addBank');
    }

    public function adminSetting(Request $request)
    {
        return view('adminView/addUser');
    }

    public function settingView(Request $request)
    {
        return view('adminView/setting');
    }
}
