<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\registrasi;
class registrasicon extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data post melalui model 'post'
        $registrasis = registrasi::all();
        return view('registrasi.index',compact('registrasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('registrasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nomorrm'=>'required|unique:registrasis|max:255','tanggalregis'=>'required|max:35',
                            'jamregis'=>'required','kodedok'=>'required','nomorindukpetugas'=>'required']);
        $registrasis = new registrasi;
        $registrasis->nomorrm = $request->nomorrm;
        $registrasis->tanggalregis = $request->tanggalregis;
        $registrasis->jamregis = $request->jamregis;
        $registrasis->kodedok = $request->kodedok;
        $registrasis->nomorindukpetugas = $request->nomorindukpetugas;
        $registrasis->save();
        return redirect()->route('registrasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $registrasis = registrasi::findOrFail($id);
        return view('registrasi.show',compact('registrasis'));
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
        $registrasis = registrasi::findOrFail($id);
        return view('registrasi.edit',compact('registrasis'));
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
            'nomorrm'=>'required|max:10','tanggalregis'=>'required|max:35',
            'jamregis'=>'required','kodedok'=>'required|max:35','nomorindukpetugas'=>'required']);

        // update data berdasarkan id
        $registrasis = registrasi::findOrFail($id);
        $registrasis->nomorrm = $request->nomorrm;
        $registrasis->tanggalregis = $request->tanggalregis;
        $registrasis->jamregis = $request->jamregis;
        $registrasis->kodedok = $request->kodedok;
        $registrasis->nomorindukpetugas = $request->nomorindukpetugas;
        $registrasis->save();
        return redirect()->route('registrasi.index');
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
        $registrasis = registrasi::findOrFail($id);
        $registrasis->delete();
        return redirect()->route('registrasi.index');
    }
}
