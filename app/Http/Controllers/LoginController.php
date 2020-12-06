<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function tambah()
    {
        return view("view-2");
    }

    public function proses(Request $request)
    {
        $validasi = $request->validate([
            "email" => ["required"],
            "password" => ['required'],

        ]);

        echo $request->get('email');
        echo $request->get('password');

        echo "<br>form ini di proses";
    }
}
