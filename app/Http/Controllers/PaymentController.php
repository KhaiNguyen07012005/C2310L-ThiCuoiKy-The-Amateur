<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PaymentController extends Controller
{
    public function submit_payment_receipt(Request $request, Payment $payment)
{
    // Kiểm tra và lưu tệp thanh toán
    $request->validate([
        'payment_receipt' => 'required|file|mimes:jpeg,png,pdf|max:2048',
    ]);

    $file = $request->file('payment_receipt');
    $path = time() . '_struk_' . $payment->user->name . '.' . $file->getClientOriginalExtension();
    Storage::disk('local')->put('public/' . $path, file_get_contents($file));

    // Cập nhật thông tin thanh toán
    $payment->update([
        'payment_receipt' => $path
    ]);

    return Redirect::back()->with('success', 'Payment receipt submitted successfully.');
}

public function confirmPayment(Payment $payment)
{
    $payment->update([
        'is_paid' => true
    ]);

    return Redirect::back()->with('success', 'Payment confirmed successfully.');
}
}
