<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;
class BarangController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listbarang = Barang::all();
        $listkategori = Kategori::all();



        return view('barang',['barang'=>$listbarang,'kategori'=>$listkategori]);
    }

    public function tambahbarang(Request $request){
           Barang::create([
                'namabarang' => $request->namabarang,
                'sku' => $request->sku,
                'harga' => $request->harga,
                'kategori_id' => $request->kategori,
            ]);
            return redirect('barang');
    }

    public function hapusbarang($id){

        $barang = Barang::find($id);
        $barang->delete();
        return redirect('barang');
    }

    public function editbarang($id){
        $barang = Barang::find($id);
        $listkategori = Kategori::all();
        return view('editbarang',['barang'=>$barang,'kategori'=>$listkategori]);
    }

    public function updatebarang(Request $request){
            $barang = Barang::find($request->id);
            $barang->namabarang = $request->namabarang;
            $barang->sku = $request->sku;
            $barang->harga = $request->harga;
            $barang->kategori_id = $request->kategori;

            $barang->save();
            return redirect('barang');
    }
}
