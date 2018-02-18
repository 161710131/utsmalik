<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;
class pasiencon extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data post melalui model 'post'
        $pasiens = pasien::all();
        return view('pasien.index',compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nomorrm'=>'required|unique:pasiens|max:255','nama'=>'required|max:35',
                            'jk'=>'required','goldar'=>'required','tl'=>'required']);
        $pasiens = new pasien;
        $pasiens->nomorrm = $request->nomorrm;
        $pasiens->nama = $request->nama;
        $pasiens->jk = $request->jk;
        $pasiens->goldar = $request->goldar;
        $pasiens->tl = $request->tl;
        $pasiens->save();
        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $pasiens = pasien::findOrFail($id);
        return view('pasien.show',compact('pasiens'));
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
        $pasiens = pasien::findOrFail($id);
        return view('pasien.edit',compact('pasiens'));
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
            'nomorrm'=>'required|max:10','nama'=>'required|max:35',
            'jk'=>'required','goldar'=>'required|max:35','tl'=>'required']);

        // update data berdasarkan id
        $pasiens = pasien::findOrFail($id);
        $pasiens->nomorrm = $request->nomorrm;
        $pasiens->nama = $request->nama;
        $pasiens->jk = $request->jk;
        $pasiens->goldar = $request->goldar;
        $pasiens->tl = $request->tl;
        $pasiens->save();
        return redirect()->route('pasien.index');
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
        $pasiens = pasien::findOrFail($id);
        $pasiens->delete();
        return redirect()->route('pasien.index');
    }
}
