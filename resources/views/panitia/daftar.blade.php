@extends('layouts.panitia_master')

@section('title', '  Daftar Calon Pemira ')

@section('content')
  <h1>Daftar Calon Pemira</h1>
  @foreach ($pemiras as $pemira)
    <a href="/pemira/{{ $pemira->id }}">{{$pemira->nama_pres}}</a><br>
    <a href="/pemira/{{ $pemira->id }}/edit">
      <button type="button" name="button">Edit</button>
    </a>
    <form action="/pemira/{{ $pemira->id }}" method="post">
      <input type="submit" name="submit" value="X">

      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE">
    </form>
    <br>
  @endforeach

@endsection
