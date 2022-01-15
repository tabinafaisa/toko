<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class produkcontroller extends Controller
{
    public  function index()
    {
        return view('penjualan');
    }
    public function simpan(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'gambar' => $request->gambar,
            'harga' => $request->harga
        ];
        DB::table('produk')->insert($data);
        return redirect(url('/'));
    }
}
