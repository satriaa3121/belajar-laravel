<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-9 |Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Blade templating</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
<div class="container">
<h1>Ini Halaman home</h1>
    <h2>Selamat Datang, {{$name}}</h2>
    <h2>Anda adalah: {{$role}}</h2>

    <!-- @if ($role == 'Penguasa')
    <a href="">ke halaman Penguasa</a>
    @elseif ($role == 'prajurit')
    <a href="">Cek persediaan</a>
    @else 
    <a href="">Mau ngapain?</a>
    @endif 
    <br>
    @if ($name == 'Reyhan Satria')
    <a href="">Khusus Vip</a>
    @else
    <a href=""">km siapa?</a> 
    @endif -->

    @switch($role)

    @case($role=='mandor')
    <a href="">ke halaman Ambil Gaji</a>
    @break

    @case($role=='pekerja')
    <a href="">Ke Gudang Persediaan</a>
    @break

    @default
    <a href="">Ambil Role</a>
    <a href="">Ajukan naik pangkat</a>

    @endswitch


</div>
    
    <!-- <button class="btn btn-primary">Pencet Sini</button> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>