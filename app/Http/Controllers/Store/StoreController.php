<?php

namespace App\Http\Controllers\Store;

use App\Events\PaymentEvent;
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
//        $assign['products'] = $this->productService->getLimit(config('configuration.paginate_default'));

        return view('store.index');
    }

    public function info()
    {
        return view('store.customer.info');
    }

    public function shop()
    {
        $assign['products'] = $this->productService->getAll(config('configuration.paginate_default'));

        return view('store.shop', $assign);
    }

    public function detail($id)
    {
        $assign['product'] = $this->productService->find($id);

        return view('store.detail', $assign);
    }

    public function cart()
    {
        $assign['data'][] = [
            'name' => 'adobe',
            'price' => 10000,
            'amount' => 10,
            'id' => 1,
            'img' => 'https://accbanquyen.vn/wp-content/uploads/2022/01/287625262_1492012301216929_5765182231600040378_n.jpg',
            'color' => 'red',
        ];

        return view('store.cart', $assign);
    }

    public function payment()
    {
        event(new PaymentEvent());
        return 'ok';
    }
}
