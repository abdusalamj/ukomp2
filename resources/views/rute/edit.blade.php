@extends('layout.master')
@section('title')
Rute
@endsection
@section('content')

    <div class="row">
      <h2>Edit Rute</h2><br  />
        <form method="post" action="{{ route('updaterute')}}">
        @csrf
        <input name="id" type="hidden" value="{{$rute->id}}">
        <input name="id_rute" type="hidden" value="{{$rute->id_rute}}">
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="name">Tujuan:</label>
            <input type="text" class="form-control" name="tujuan" value="{{$rute->tujuan}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Rute Awal:</label>
            <input type="text" class="form-control" name="rute_awal" value="{{$rute->rute_awal}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Rute Akhir:</label>
            <input type="text" class="form-control" name="rute_akhir" value="{{$rute->rute_akhir}}">
          </div>
          <div class="form-group col-md-4">
            <label for="name">Harga:</label>
            <input type="text" class="form-control" name="harga" value="{{$rute->harga}}">
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
          <div class="form-group col-md-12" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
    </div>

@endsection
