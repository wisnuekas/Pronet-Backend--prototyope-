@extends('layouts.panitia_master')

@section('title', '  Input Calon Pemira ')

@section('content')
  <h1>Input Calon Pemira</h1>

  <form action="/panitia/input" method="post">
    <h1>Presiden</h1>
    <input type="text" name="nim_pres" placeholder="NIM"><br>
    <input type="text" name="nama_pres" placeholder="Nama"><br>
    <input type="text" name="progdi_pres" placeholder="Progdi"><br>
    <input type="text" name="ipk_pres" placeholder="IPK"><br>
    <br>
    <h1>Wakil Presiden</h1>
    <input type="text" name="nim_wapres" placeholder="NIM"><br>
    <input type="text" name="nama_wapres" placeholder="Nama"><br>
    <input type="text" name="progdi_wapres" placeholder="Progdi"><br>
    <input type="text" name="ipk_wapres" placeholder="IPK"><br>
    <br>
    <br>
    <input type="text" name="visi" placeholder="Visi"><br>
    <textarea name="misi" rows="8" cols="40" placeholder="Misi"></textarea><br>
    <br>
    <input type="submit" name="submit" value="Input">

    {{ csrf_field() }}
  </form>
@endsection
