@extends('master')
@section('active_ds','active')
@section('title','Dosen')
@section('kontenutama')
<ul class="list-group">
    @foreach ($dosen as $dsn)
    <li class="list-group-item">{{ $dsn }}</li>
    @endforeach
  </ul>
@endsection