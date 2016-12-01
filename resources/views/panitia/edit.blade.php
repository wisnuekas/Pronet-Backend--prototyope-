@extends('layouts.panitia_master')

@section('title', '  Edit Calon Pemira ')

@section('content')
  <h1>Edit Calon Pemira</h1>
  <h1>{{ $pemira->nama_pres }}</h1>

  <form action="/pemira/{{ $pemira->id }}" method="post">
    <h1>Presiden</h1>
    <input type="text" name="nim_pres" value="{{ $pemira->nim_pres }}"><br>
    <input type="text" name="nama_pres" value="{{ $pemira->nama_pres }}"><br>
    <input type="text" name="progdi_pres" value="{{ $pemira->progdi_pres }}"><br>
    <input type="text" name="ipk_pres" value="{{ $pemira->ipk_pres }}"><br>
    <br>
    <h1>Wakil Presiden</h1>
    <input type="text" name="nim_wapres" value="{{ $pemira->nim_wapres }}"><br>
    <input type="text" name="nama_wapres" value="{{ $pemira->nama_wapres }}"><br>
    <input type="text" name="progdi_wapres" value="{{ $pemira->progdi_wapres }}"><br>
    <input type="text" name="ipk_wapres" value="{{ $pemira->ipk_wapres }}"><br>
    <br>
    <br>
    <input type="text" name="visi" value="{{$pemira->visi}}"><br>
    <textarea name="misi" rows="8" cols="40">{{ $pemira->misi }}</textarea><br>
    <br>
    <input type="submit" name="submit" value="edit">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
  </form>
@endsection
