@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')
<div class="container">
<h1>Ini Halaman home</h1>
    <h2>Selamat Datang, {{$name}}</h2>
    <h2>Anda adalah: {{$role}}</h2>


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
@endsection
