<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use App\Models\TypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;
use Nette\Utils\Type;

class AdminController extends Controller
{
    //
    public function dashboard(){
        return view('admin.main');
    }

    public function index(){
        $products = ProductModel::all();

        return view('admin.product.index', ['products' => $products]);
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

    public function create(){
        $assign['product'] = ProductModel::all();
        $assign['description'] = ProductModel::all();
        $assign['type'] = TypeModel::all();
        $assign['name'] = TypeModel::all();
        $assign['amount'] = TypeModel::all();
        return view('admin.product.create', $assign);
    }

}
