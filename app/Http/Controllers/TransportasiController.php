<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transportasi;

class TransportasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Transportasi::all();
        return view('transportasi.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transportasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transportasi = new Transportasi();
        $transportasi->id = $request->input('id');
        $transportasi->nama_transportasi = $request->input('nama_transportasi');
        $transportasi->jumlah_kursi = $request->input('jumlah_kursi');
        $transportasi->keterangan = $request->input('keterangan');
        $transportasi->type_transportasi = $request->input('type_transportasi');
        $transportasi->save();

        return redirect('transportasi')->with('success','Transportasi Berhasil Ditambahkan');
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
        $transportasi = Transportasi::find($id);
        return view('transportasi.edit',compact('transportasi','id'));
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
       $transportasi = Transportasi::find($request->input('id'));
        $transportasi->nama_transportasi = $request->input('nama_transportasi');
        $transportasi->jumlah_kursi = $request->input('jumlah_kursi');
        $transportasi->keterangan = $request->input('keterangan');
        $transportasi->type_transportasi = $request->input('type_transportasi');
        $transportasi->save();

        return redirect('transportasi')->with('success','Transportasi Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transportasi = Transportasi::find($id);
        $transportasi->delete();
        return redirect('transportasi')->with('success','Transportasi Berhasil Dihapus');
    }
}
