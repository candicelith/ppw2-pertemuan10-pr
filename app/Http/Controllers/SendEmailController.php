<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendMailJob;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'nim', 'password']);

        dispatch(new SendMailJob($data));

        return redirect()->route('send-email')
            ->with('success', 'Email sent successfully');
    }
}
