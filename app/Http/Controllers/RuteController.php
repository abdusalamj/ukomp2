<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rute;
use App\Transportasi;

class RuteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rute::all();
        return view('rute.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['transportasis'] = Transportasi::all();
        return view('rute.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $arr = str_random(3);
        $rute = new Rute();
        $rute->id_rute = "Ru-".$arr;
        $rute->tujuan = $request->input('tujuan');
        $rute->rute_awal = $request->input('rute_awal');
        $rute->rute_akhir = $request->input('rute_akhir');
        $rute->harga = $request->input('harga');
        $rute->id_transportasi = $request->input('id_transportasi');

        $rute->save();
        return redirect('rute')->with('success','Rute Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rute = Rute::find($id);
        $transportasis = Transportasi::all();
        return view('rute.edit', compact('rute', 'id', 'transportasis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rute = Rute::find($request->input('id'));
        $rute->id_rute = $request->input('id_rute');
        $rute->tujuan = $request->input('tujuan');
        $rute->rute_awal = $request->input('rute_awal');
        $rute->rute_akhir = $request->input('rute_akhir');
        $rute->harga = $request->input('harga');
        $rute->id_transportasi = $request->input('id_transportasi');
        $rute->save();

        return redirect('rute')->with('success','Rute Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rute = Rute::find($id);
        $rute->delete();
        return redirect('rute')->with('success','Rute Berhasil Dihapus');
    }
}
