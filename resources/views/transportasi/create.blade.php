@extends('layout.master')
@section('title')
Transportasi
@endsection
@section('content')
    <div class="row">
      <h2>Transportasi</h2><br/>
      <form method="post" action="{{url('transportasi/store')}}">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nama Transportasi:</label>
            <input type="text" class="form-control" name="nama_transportasi">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Jumlah Kursi:</label>
            <input type="text" class="form-control" name="jumlah_kursi">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Type Transportasi:</label>
            <select name="type_transportasi" class="form-control" id="Name">
              <option value="kereta">Kereta Api</option>
              <option value="pesawat">Pesawat Terbang</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Keterangan:</label>
            <input type="text" class="form-control" name="keterangan">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  @endsection
