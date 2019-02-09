@extends('layout.master')
@section('title')
Transportasi
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
        <th class="text-center">Nama Transportasi</th>
        <th class="text-center">Jumlah Kursi</th>
        <th class="text-center">Type Transportasi</th>
        <th class="text-center">Keterangan</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($data as $transportasi)
      <tr>
        <td class="text-center">{{$transportasi['nama_transportasi']}}</td>
        <td class="text-center">{{$transportasi['jumlah_kursi']}}</td>
        <td class="text-center">{{$transportasi['type_transportasi']}}</td>
        <td class="text-center">{{$transportasi['keterangan']}}</td>
         <td align="right"><a href="{{action('TransportasiController@edit', $transportasi['id'])}}" class="btn btn-warning">Edit</a></td>
         <td align="left"><a href ="{{action('TransportasiController@destroy', $transportasi['id'])}}" class="btn btn-danger">Delete</a></td>

      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
 <td align="right"><a href="transportasi/create" class="btn btn-success">Tambah Transportasi Baru</a></td>
 @endsection
