<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use App\Models\User;
use App\Models\UserPurchased;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{

    public function index()
    {
        $checkUser = User::latest()->first();
        $users = UserPurchased::with(['user', 'spesification'])->where('user_id', $checkUser->_id)->first();
        $payments = PaymentMethod::all();
        return view('checkout.index', compact('users', 'payments'));
    }

    public function update(Request $request)
    {
        $checkUser = User::latest()->first();
        UserPurchased::with(['user', 'spesification'])->where('user_id', $checkUser->_id)->update([
            'status_laundry' => "Success",
            'payment_method_id' => $request->payment_method_id,
        ]);

        return redirect()->route('purchased.index')->with('success', 'Data Berhasil Di Tambahkan');
    }
}
