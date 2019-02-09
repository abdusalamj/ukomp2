@extends('layout.master')
@section('title')
Rute
@endsection
@section('content')
    <div class="row">
      <h2>Rute</h2><br/>
      <form method="post" action="{{url('rute/store')}}">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="Name">Tujuan:</label>
            <input type="text" class="form-control" name="tujuan">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Rute Awal:</label>
            <input type="text" class="form-control" name="rute_awal">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Rute Akhir:</label>
            <input type="text" class="form-control" name="rute_akhir">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Harga:</label>
            <input type="text" class="form-control" name="harga">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Transportasi:</label>
            <select name="id_transportasi" class="form-control" id="Name">
              @foreach($transportasis as $key)
              <option value="{{$key->id}}">{{$key->nama_transportasi}}</option>
              @endforeach
            </select>
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
