<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
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
            "umur" => ['numeric'],

        ]);

        $nama_file = time() . "." . $request->file("gambar")->extension();

        $request->file("gambar")->move(public_path(), $nama_file);

        echo "<img src='/$nama_file'>";

        echo $request->get('email');
        echo $request->get('password');

        echo "<br>form ini di proses";
    }
}
