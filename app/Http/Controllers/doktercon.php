<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dokter;
class doktercon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan semua data post melalui model 'post'
        $dokters = dokter::all();
        return view('dokter.index',compact('dokters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['kodedok'=>'required|unique:dokters|max:255','nama'=>'required|max:35',
                            'jk'=>'required','spesialis'=>'required','nomorijinpraktek'=>'required']);
        $dokters = new dokter;
        $dokters->kodedok = $request->kodedok;
        $dokters->nama = $request->nama;
        $dokters->jk = $request->jk;
        $dokters->spesialis = $request->spesialis;
        $dokters->nomorijinpraktek = $request->nomorijinpraktek;
        $dokters->save();
        return redirect()->route('dokter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $dokters = dokter::findOrFail($id);
        return view('dokter.show',compact('dokters'));
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
        $dokters = dokter::findOrFail($id);
        return view('dokter.edit',compact('dokters'));
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
            'kodedok'=>'required|max:10','nama'=>'required|max:35',
            'jk'=>'required','spesialis'=>'required|max:35','nomorijinpraktek'=>'required']);

        // update data berdasarkan id
        $dokters = dokter::findOrFail($id);
        $dokters->kodedok = $request->kodedok;
        $dokters->nama = $request->nama;
        $dokters->jk = $request->jk;
        $dokters->spesialis = $request->spesialis;
        $dokters->nomorijinpraktek = $request->nomorijinpraktek;
        $dokters->save();
        return redirect()->route('dokter.index');
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
        $dokters = dokter::findOrFail($id);
        $dokters->delete();
        return redirect()->route('dokter.index');
    }
}
