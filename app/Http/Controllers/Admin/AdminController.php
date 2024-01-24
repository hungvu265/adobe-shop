<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ComponentModel;
use App\Models\ProductModel;
use App\Models\TypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;
use Nette\Utils\Type;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.main');
    }

    public function index()
    {
        $products = ProductModel::all();

        return view('admin.product.index', ['products' => $products]);
    }

    public function login(Request $request)
    {
        $data = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($data)) {
            return redirect()->to(route(ADMIN_DASHBOARD));
        }

        return view('admin.auth.login');

    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->to(route(ADMIN_LOGIN));
    }

    public function create()
    {
        $assign['product'] = ProductModel::all();
        $assign['description'] = ProductModel::all();
        $assign['type'] = TypeModel::all();
        $assign['name'] = TypeModel::all();
        $assign['amount'] = TypeModel::all();
        return view('admin.product.create', $assign);
    }

    public function edit($id){
        $assign['product'] = ProductModel::findOrFail($id);
        $assign['description'] = $assign['product']->description;
        $assign['price'] = $assign['product']->price;
        $assign['amount'] = $assign['product']->amount;
        $assign['name'] = $assign['product']->name;
        $assign['type'] = $assign['product']->type;

        return view('admin.product.edit', $assign);

    }

    public function store(Request $request)
    {
        $dataRequest = $request->all();

        $dataProduct = $dataComponent = $dataType = array();
        if($dataRequest){
            $file = $request->file('image');
            $dataProduct = array(
                'name' => $dataRequest['name'],
                'description' => $dataRequest['description'],
                'type_id' => $dataRequest['type']
            );
            $product = ProductModel::create($dataProduct);
            $dataComponent = array(
                'image' => $file ? $file->getClientOriginalName() : null,
                'product_id' => $product->id,
            );
            ComponentModel::create($dataComponent);
            $dataType = array(
                'price' => $dataRequest['price'],
                'amount' => $dataRequest['amount'],
                'name' => $dataRequest['name'],

            );
            TypeModel::create($dataType);
            return redirect()->back()->with(['Status' => 'success', 'message' => 'Thêm mới thành công']);
        }else
            return redirect()->back()->with(['Status' => 'fail', 'message' => 'Thêm mới thất bại']);

    }

}
