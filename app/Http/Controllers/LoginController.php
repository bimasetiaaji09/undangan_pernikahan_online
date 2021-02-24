<?php

namespace App\Http\Controllers;

use App\Models\UserAdminModel;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function Login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $where = [
            'username' => $username,
            'password' => $password
        ];
        $data = UserAdminModel::where($where)->first();
        if($data){
            session(['menu_aktif' => $data->username]);
            return redirect()->route('DataPernikahan');
        }else{
            return back();
        }

    }
}
