<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductSlider;
use App\Models\Product;
use App\Models\Package;
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
        $products = Product::all();

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
        $assign['product'] = Product::all();
        $assign['description'] = Product::all();
        $assign['type'] = Package::all();
        $assign['name'] = Package::all();
        $assign['amount'] = Package::all();
        return view('admin.product.create', $assign);
    }

    public function edit($id){
        $assign['product'] = Product::findOrFail($id);
        $assign['type'] = Package::all();
        $assign['id'] = $id;

        return view('admin.product.edit', $assign);

    }

    public function store(Request $request)
    {
        try {
            $dataRequest = $request->all();
            $file = $request->file('image') ?? null;
            dd($file);
            $status = $dataRequest['status'] ?? null;

            $product = Product::create([
                'name' => $dataRequest['name'],
                'type_id' => $dataRequest['type'],
                'description' => $dataRequest['description'],
                'status' => $status === 'on' ? 1 : 0
            ]);

            ProductSlider::create([
                'product_id' => $product->id,
                'image' => !empty($file) ? $file->getClientOriginalName() : null
            ]);

            return redirect()->back()->with(['status' => 'success', 'message' => 'Thêm mới thành công']);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['status' => 'fail', 'message' => 'Thêm mới thất bại']);
        }
    }

    public function update(Request $request)
    {
        try {
            $dataRequest = $request->all();
            $status = $dataRequest['status'] ?? null;

            $product = Product::findOrFail($dataRequest['id']);
            $product->update([
                'name' => $dataRequest['name'],
                'type_id' => $dataRequest['type'],
                'description' => $dataRequest['description'],
                'status' => $status === 'on' ? 1 : 0
            ]);
            $component = $product->component->first();
            $component->update([
                'image' => !empty($dataRequest['image']) ? $dataRequest['image']->getClientOriginalName() : null
            ]);

            return redirect()->back()->with(['status' => 'success', 'message' => 'Cập nhật thành công']);
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with(['status' => 'fail', 'message' => 'Thêm mới thất bại']);
        }
    }
}
