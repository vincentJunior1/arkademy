<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
    {
        $dataProduk = Produk::all();
        return view('home', ['dataProduk' => $dataProduk] );
    }

    public function storePage()
    {
        return view('tambahProduk');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'harga' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/');
    }

    public function editPage($id)
    {
        $data = Produk::find($id);
        return view('editProduk',['data' => $data]);
    }
    
    public function updateStore($id, Request $request)
    {
        $this->validate($request,[
            'nama_produk' => 'required',
            'keterangan' => 'required',
            'harga' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $produk = Produk::find($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->keterangan = $request->keterangan;
        $produk->harga = $request->harga;
        $produk->jumlah = $request->jumlah;

        $produk->save();
        return redirect('/');
    }

    public function deleteProduk($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/');
    }
}
