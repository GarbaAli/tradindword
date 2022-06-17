<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sendMailController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|min:3|max:200',
            // 'wallet' => 'required|min:5|max:150',
            'email' => 'required|email|max:150|',
            'amount' => 'required|numeric'
        ]);

        //Envoie de mail au user

        // Mail::to($data->email)->cc('contact@asset.trade-bonus.net')->send(new UserMail($data));
        // session()->flash('message', 'text');

        return redirect()->route('after');
    }
}
