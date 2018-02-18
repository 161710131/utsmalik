<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tindakan;
class tindakancon extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data post melalui model 'post'
        $tindakans = tindakan::all();
        return view('tindakan.index',compact('tindakans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('tindakan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['kode_tindakan'=>'required|unique:tindakans|max:255','nama'=>'required|max:35',
                            'jenistindakan'=>'required|max:35','waktutindakan'=>'required|max:35','tariftindakan'=>'required|max:50']);
        $tindakans = new tindakan;
        $tindakans->kode_tindakan = $request->kode_tindakan;
        $tindakans->nama = $request->nama;
        $tindakans->jenistindakan = $request->jenistindakan;
        $tindakans->waktutindakan = $request->waktutindakan;
        $tindakans->tariftindakan = $request->tariftindakan;
        $tindakans->save();
        return redirect()->route('tindakan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tindakans = tindakan::findOrFail($id);
        return view('tindakan.show',compact('tindakans'));
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
        $tindakans = tindakan::findOrFail($id);
        return view('tindakan.edit',compact('tindakans'));
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
            'kode_tindakan'=>'required|max:10','nama'=>'required|max:35',
            'jenistindakan'=>'required|max:35','waktutindakan'=>'required|max:35','tariftindakan'=>'required|max:50']);

        // update data berdasarkan id
        $tindakans = tindakan::findOrFail($id);
        $tindakans->kode_tindakan = $request->kode_tindakan;
        $tindakans->nama = $request->nama;
        $tindakans->jenistindakan = $request->jenistindakan;
        $tindakans->waktutindakan = $request->waktutindakan;
        $tindakans->tariftindakan = $request->tariftindakan;
        $tindakans->save();
        return redirect()->route('tindakan.index');
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
        $tindakans = tindakan::findOrFail($id);
        $tindakans->delete();
        return redirect()->route('tindakan.index');
    }
}
