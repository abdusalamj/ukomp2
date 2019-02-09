@extends('layout.master')
@section('title')
Rute
@endsection
@section('content')
    <div class="row">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th class="text-center">Tujuan</th>
        <th class="text-center">Rute Awal</th>
        <th class="text-center">Rute Akhir</th>
        <th class="text-center">Harga</th>
        <th class="text-center">Transportasi</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($data as $rute)
      <tr>
        <td class="text-center">{{$rute['tujuan']}}</td>
        <td class="text-center">{{$rute['rute_awal']}}</td>
        <td class="text-center">{{$rute['rute_akhir']}}</td>
        <td class="text-center">{{$rute['harga']}}</td>
        <td class="text-center">{{$rute->Transportasi->nama_transportasi}}</td>
         <td align="right"><a href="{{action('RuteController@edit', $rute['id'])}}" class="btn btn-warning">Edit</a></td>
         <td align="left"><a href ="{{action('RuteController@destroy', $rute['id'])}}" class="btn btn-danger">Delete</a></td>

      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
 <td align="right"><a href="rute/create" class="btn btn-success">Tambah Rute Baru</a></td>
 @endsection
