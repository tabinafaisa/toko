<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class usercontroller extends Controller
{
    public function index()
    {
        return view('registrasi');
    }
    public function simpan(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $request->password
        ];

        DB::table('user')->insert($data);
        return redirect(url('/'));
    }
}
