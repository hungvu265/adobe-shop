<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.index');
    }

    public function index(){
        $products = ProductModel::all();

        return view('admin.product.index', ['product' => $products]);
    }

    public function login(Request $request){
        $data = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($data)){
            return redirect()->to(route(ADMIN_DASHBOARD));
        }

        return view('admin.auth.login');

    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->to(route(ADMIN_LOGIN));
    }

}
