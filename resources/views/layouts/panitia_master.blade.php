<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <nav>
        <a href="/panitia/input">Input Pemira</a>
        <a href="/panitia/daftar">Daftar Pemira</a>
      </nav>
    </header>
    <br>


      @yield('content')


    <br>
    <footer>
      <p>&copy; Laravel & Wisnu Eka Saputa</p>
    </footer>
  </body>
</html>
