<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekamtindakan;
class rekamtindakancon extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data post melalui model 'post'
        $rekamtindakans = rekamtindakan::all();
        return view('rekamtindakan.index',compact('rekamtindakans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('rekamtindakan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['diagnosasakit'=>'required|unique:rekamtindakans|max:255','tanggalrawat'=>'required|max:35',
                            'suhutubuh'=>'required','tensidarah'=>'required','ketgejala'=>'required']);
        $rekamtindakans = new rekamtindakan;
        $rekamtindakans->diagnosasakit = $request->diagnosasakit;
        $rekamtindakans->tanggalrawat = $request->tanggalrawat;
        $rekamtindakans->suhutubuh = $request->suhutubuh;
        $rekamtindakans->tensidarah = $request->tensidarah;
        $rekamtindakans->ketgejala = $request->ketgejala;
        $rekamtindakans->save();
        return redirect()->route('rekamtindakan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $rekamtindakans = rekamtindakan::findOrFail($id);
        return view('rekamtindakan.show',compact('rekamtindakans'));
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
        $rekamtindakans = rekamtindakan::findOrFail($id);
        return view('rekamtindakan.edit',compact('rekamtindakans'));
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
            'diagnosasakit'=>'required|max:10','tanggalrawat'=>'required|max:35',
            'suhutubuh'=>'required','tensidarah'=>'required|max:35','ketgejala'=>'required']);

        // update data berdasarkan id
        $rekamtindakans = rekamtindakan::findOrFail($id);
        $rekamtindakans->diagnosasakit = $request->diagnosasakit;
        $rekamtindakans->tanggalrawat = $request->tanggalrawat;
        $rekamtindakans->suhutubuh = $request->suhutubuh;
        $rekamtindakans->tensidarah = $request->tensidarah;
        $rekamtindakans->ketgejala = $request->ketgejala;
        $rekamtindakans->save();
        return redirect()->route('rekamtindakan.index');
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
        $rekamtindakans = rekamtindakan::findOrFail($id);
        $rekamtindakans->delete();
        return redirect()->route('rekamtindakan.index');
    }
}
