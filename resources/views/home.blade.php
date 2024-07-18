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


    <!-- @for($i = 0; $i < 11; $i++)
    {{$i}} <br>
    @endfor -->

    <!-- @foreach($buah as $data)
    {{$data}} <br>
    @endforeach -->

    <table class="table">
        <tr>
            <th>No.</th>
            <th>nama</th>
        </tr>
        @foreach($buah as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data}}</td>
        </tr>
    @endforeach
    </table>


</div>
    
    <!-- <button class="btn btn-primary">Pencet Sini</button> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>