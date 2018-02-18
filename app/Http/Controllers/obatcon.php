<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obat;
class obatcon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data post melalui model 'post'
        $obats = obat::all();
        return view('obat.index',compact('obats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['kode_obat'=>'required|unique:obats|max:255','namaobat'=>'required|max:35',
                            'kategori'=>'required|max:35','jumlah'=>'required|max:35','harga'=>'required|max:50']);
        $obats = new obat;
        $obats->kode_obat = $request->kode_obat;
        $obats->namaobat = $request->namaobat;
        $obats->kategori = $request->kategori;
        $obats->jumlah = $request->jumlah;
        $obats->harga = $request->harga;
        $obats->save();
        return redirect()->route('obat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $obats = obat::findOrFail($id);
        return view('obat.show',compact('obats'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data pos berdasrkan id di halaman pos edit
        $obats = obat::findOrFail($id);
        return view('obat.edit',compact('obats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
            'kode_obat'=>'required|max:10','namaobat'=>'required|max:35',
            'kategori'=>'required|max:35','jumlah'=>'required|max:35','harga'=>'required|max:50']);

        // update data berdasarkan id
        $obats = obat::findOrFail($id);
        $obats->kode_obat = $request->kode_obat;
        $obats->namaobat = $request->namaobat;
        $obats->kategori = $request->kategori;
        $obats->jumlah = $request->jumlah;
        $obats->harga = $request->harga;
        $obats->save();
        return redirect()->route('obat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete data beradasarkan id
        $obats = obat::findOrFail($id);
        $obats->delete();
        return redirect()->route('obat.index');
    }
}
