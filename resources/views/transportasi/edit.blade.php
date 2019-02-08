@extends('layout.master')
@section('title')
Transportasi
@endsection
@section('content')

    <div class="row">
      <h2>Edit Transportasi</h2><br  />
        <form method="post" action="{{action('TransportasiController@update')}}">
        @csrf
        <input name="id" type="hidden" value="{{$transportasi->id}}">
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="name">ID Transportasi:</label>
            <input type="text" class="form-control" name="id_transportasi" value="{{$transportasi->id_transportasi}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Nama Transportasi:</label>
            <input type="text" class="form-control" name="nama_transportasi" value="{{$transportasi->nama_transportasi}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Jumlah Kursi:</label>
            <input type="text" class="form-control" name="jumlah_kursi" value="{{$transportasi->jumlah_kursi}}">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Type Transportasi:</label>
            <select name="type_transportasi" class="form-control" id="Name">
              <option value="kereta">Kereta Api</option>
              <option value="pesawat">Pesawat Terbang</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="name">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="{{$transportasi->keterangan}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-12" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>

@endsection
