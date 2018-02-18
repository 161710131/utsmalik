<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bpjs;
class bpjscon extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data post melalui model 'post'
        $bpjs = Bpjs::all();
        return view('Bpjs.index',compact('bpjs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Bpjs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nomorkartu'=>'required|unique:bpjs|max:255','nama'=>'required|max:35',
                            'alamat'=>'required','tl'=>'required','nik'=>'required']);
        $bpjs = new Bpjs;
        $bpjs->nomorkartu = $request->nomorkartu;
        $bpjs->nama = $request->nama;
        $bpjs->alamat = $request->alamat;
        $bpjs->tl = $request->tl;
        $bpjs->nik = $request->nik;
        $bpjs->save();
        return redirect()->route('Bpjs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $bpjs = Bpjs::findOrFail($id);
        return view('Bpjs.show',compact('bpjs'));
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
        $bpjs = Bpjs::findOrFail($id);
        return view('Bpjs.edit',compact('bpjs'));
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
            'nomorkartu'=>'required|max:10','nama'=>'required|max:35',
            'alamat'=>'required','tl'=>'required|max:35','nik'=>'required']);

        // update data berdasarkan id
        $bpjs = Bpjs::findOrFail($id);
        $bpjs->nomorkartu = $request->nomorkartu;
        $bpjs->nama = $request->nama;
        $bpjs->alamat = $request->alamat;
        $bpjs->tl = $request->tl;
        $bpjs->nik = $request->nik;
        $bpjs->save();
        return redirect()->route('Bpjs.index');
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
        $bpjs = Bpjs::findOrFail($id);
        $bpjs->delete();
        return redirect()->route('Bpjs.index');
    }
}
