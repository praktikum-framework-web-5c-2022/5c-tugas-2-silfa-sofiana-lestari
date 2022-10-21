@extends('master')
@section('active_mk','active')
@section('title','MataKuliah')
@section('kontenutama')
<ul class="list-group">
    @foreach ($matakuliah as $matkul)
    <li class="list-group-item">{{ $matkul }}</li>
    @endforeach
  </ul>
@endsection