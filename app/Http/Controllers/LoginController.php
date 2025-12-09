<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $username = $request->username;

        $request->session()->put('user_id', 1);
        $request->session()->put('username', $username);

        return redirect('/');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('login');
    }

    public function splitter(Request $request){
        if($request->session()->get('username') == 'pembelian'){
            return redirect('pembelian/dashboard');
        } elseif($request->session()->get('username') == 'produksi'){
            return redirect('produksi/dashboard');
        } elseif($request->session()->get('username') == 'marketing'){
            return redirect('marketing/dashboard');
        } else{
            return redirect('logout');
        }
    }
}
