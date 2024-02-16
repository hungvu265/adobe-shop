<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function addCart($request)
    {
        $dataRequest = $request->all();
        $product = $this->productService->find($dataRequest['id']);

        $data = [
            'name'      => $product->name,
            'amount'    => $dataRequest['amount'],
            'time'      => strtotime(now())
        ];

        $this->productService->addCart($data, $dataRequest['id']);

        return response()->json(Session::get('cart'));
    }
}
