<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index()
    {
        return view('store.index');
    }

    public function info()
    {
        return view('store.customer.info');
    }
}
