<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistem Pemilihan Pemira BEM Udinus</title>
  </head>
  <body>
    <h1>Daftar. Login. Vote</h1>
    <hr>
    @foreach ($pemiras as $pemira)
        <h1>{{$pemira->nama_pres}}</h1>
        <h2>{{$pemira->nama_wapres}}</h2>
        <br>
        <h3>{{$pemira->visi}}</h3>
        <h3>{{$pemira->misi}}</h3>
        <br><br><br>
    @endforeach
    <hr>
    <br>
    <h1>Register</h1>
    <form action="/" method="post">
      <input type="text" name="nama" required><br>
      <input type="text" name="progdi" required><br>
      <input type="text" name="nim" required>
      <input type="password" name="password" required><br>
      <br>
      <input type="submit" name="submit" value="Daftar">
      {{ csrf_field() }}
    </form>
  </body>
</html>
