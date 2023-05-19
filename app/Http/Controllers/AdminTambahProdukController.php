<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class AdminTambahProdukController extends Controller
{
    public function tm_produk()
    {
        return view("admin.tm_produk");
    }

    
    // fungsi menambahkan produk


    public function menambahproduk(Request $request)
    {

        if($request->hasfile('image')){
            $newImageName = $request->nama . '.'.$request->image->extension();
            $request->image->move(public_path('image/produk/'), $newImageName);
        }else{
            return $request;
        } 

        Produk::create([
            'kode_produk' => $request->kode_produk,
            'nama' => $request->nama,
            'image' =>$newImageName,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);
        return redirect()
            ->back();
    }


}