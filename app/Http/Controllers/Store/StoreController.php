<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Services\ProductService;

class StoreController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $assign['products'] = $this->productService->getLimit(8);

        return view('store.index', $assign);
    }

    public function info()
    {
        return view('store.customer.info');
    }

    public function shop()
    {
        $assign['products'] = $this->productService->getAll(8);

        return view('store.shop', $assign);
    }
}
