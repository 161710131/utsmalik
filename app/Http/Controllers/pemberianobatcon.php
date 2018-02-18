<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pemberianobat;
class pemberianobatcon extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data post melalui model 'post'
        $pemberianobats = pemberianobat::all();
        return view('pemberianobat.index',compact('pemberianobats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pemberianobat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nomorrawatjalan'=>'required|unique:pemberianobats|max:255','tgldiberiobat'=>'required|max:35',
                            'tglrawat'=>'required','jumlahobat'=>'required','dosis'=>'required']);
        $pemberianobats = new pemberianobat;
        $pemberianobats->nomorrawatjalan = $request->nomorrawatjalan;
        $pemberianobats->tgldiberiobat = $request->tgldiberiobat;
        $pemberianobats->tglrawat = $request->tglrawat;
        $pemberianobats->jumlahobat = $request->jumlahobat;
        $pemberianobats->dosis = $request->dosis;
        $pemberianobats->save();
        return redirect()->route('pemberianobat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $pemberianobats = pemberianobat::findOrFail($id);
        return view('pemberianobat.show',compact('pemberianobats'));
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
        $pemberianobats = pemberianobat::findOrFail($id);
        return view('pemberianobat.edit',compact('pemberianobats'));
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
            'nomorrawatjalan'=>'required|max:255','tgldiberiobat'=>'required|max:35',
                            'tglrawat'=>'required','jumlahobat'=>'required','dosis'=>'required']);

        // update data berdasarkan id
        $pemberianobats = pemberianobat::findOrFail($id);
        $pemberianobats->nomorrawatjalan = $request->nomorrawatjalan;
        $pemberianobats->tgldiberiobat = $request->tgldiberiobat;
        $pemberianobats->tglrawat = $request->tglrawat;
        $pemberianobats->jumlahobat = $request->jumlahobat;
        $pemberianobats->dosis = $request->dosis;
        $pemberianobats->save();
        return redirect()->route('pemberianobat.index');
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
        $pemberianobats = pemberianobat::findOrFail($id);
        $pemberianobats->delete();
        return redirect()->route('pemberianobat.index');
    }
}
