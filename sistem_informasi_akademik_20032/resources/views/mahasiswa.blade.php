@extends('master')

@section('title','Mahasiswa')
@section('active_mhs','active')
@section('kontenutama')
<ul class="list-group">
    @foreach ($mahasiswa as $mhs)
    <li class="list-group-item">{{ $mhs }}</li>
    @endforeach
  </ul>
@endsection
