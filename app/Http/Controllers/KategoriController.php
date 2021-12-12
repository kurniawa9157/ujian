<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;

class KategoriController extends Controller
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
        return view('kategori',['barang'=>$listbarang,'kategori'=>$listkategori]);
    }

    public function tambahkategori(Request $request){
            Kategori::create([
                'namakategori' => $request->namakategori,
                'keterangan' => $request->keterangan,
            ]);

            return redirect('kategori');
    }

    public function hapuskategori($id){
        $kategori = Kategori::find($id);
        $kategori->delete();

        $barang = Barang::where("kategori_id",$id)->get();
        $barang->delete();
        return redirect('kategori');
    }

    public function editkategori($id){
        $kategori = Kategori::find($id);

        return view('editkategori',['kategori'=>$kategori]);
    }

    public function updatekategori(Request $request){
        $kategori = Kategori::find($request->id);
        $kategori->namakategori = $request->namakategori;
        $kategori->keterangan = $request->keterangan;

        $kategori->save();
        return redirect('kategori');
    }
}
