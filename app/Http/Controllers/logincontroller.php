<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class logincontroller extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function ceklogin(Request $request)
    {
        return $request;
        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];
        DB::table('login')->insert($data);
        return redirect(url('/'));
    }
}
