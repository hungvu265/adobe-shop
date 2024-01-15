<?php

namespace App\Http\Controllers\Store\Customer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('store.customer.login');
    }

    public function handle(Request $request)
    {
        $dataRequest = $request->only(['email', 'password']);

        $customer = Auth::guard('web')->attempt($dataRequest);

        if ($customer) {
            return redirect()->route('store.index');
        }

        return redirect()->back();
    }
}
