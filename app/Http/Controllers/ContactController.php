<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ];

        Mail::send('emails.contact', $data, function ($messages) use ($data) {
            $messages->to('hoanspurs2@gmail.com') // Thay bằng Gmail của bạn
                    ->subject($data['subject']);
        });

        return redirect()->back()->with('success', 'Tin nhắn của bạn đã được gửi thành công!');
    }
}

