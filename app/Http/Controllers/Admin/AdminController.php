<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.index');
    }

    public function login(Request $request){
        $data = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($data)){
            return redirect()->to(route(ADMIN_DASHBOARD));
        }

        return view('admin.auth.login');

    }

}
