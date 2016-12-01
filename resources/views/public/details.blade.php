@extends('layouts.panitia_master')

@section('title', 'Data Calon Pemira')

@section('content')
  <h1>Data Calon Pemira</h1>
  <h1>{{ $pemira->nama_pres }}</h1>

    <h1>Presiden</h1>
    <input type="text" name="nim_pres" value="{{ $pemira->nim_pres }}" disabled><br>
    <input type="text" name="nama_pres" value="{{ $pemira->nama_pres }}" disabled><br>
    <input type="text" name="progdi_pres" value="{{ $pemira->progdi_pres }}" disabled><br>
    <input type="text" name="ipk_pres" value="{{ $pemira->ipk_pres }}" disabled><br>
    <br>
    <h1>Wakil Presiden</h1>
    <input type="text" name="nim_wapres" value="{{ $pemira->nim_wapres }}" disabled><br>
    <input type="text" name="nama_wapres" value="{{ $pemira->nama_wapres }}" disabled><br>
    <input type="text" name="progdi_wapres" value="{{ $pemira->progdi_wapres }}" disabled><br>
    <input type="text" name="ipk_wapres" value="{{ $pemira->ipk_wapres }}" disabled><br>
    <br>
    <br>
    <input type="text" name="visi" value="{{$pemira->visi}}" disabled><br>
    <textarea name="misi" rows="8" cols="40" disabled>{{ $pemira->misi }}</textarea><br>
    <br>

@endsection
