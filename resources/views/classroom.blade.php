@extends('layout.mainlayout')

@section('title', 'ClassRoom')

@section('content')
<h1>Ini Halaman Class</h1>
<h3>Class List</h3>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
         @foreach($classList as $data)
         <td>{{$loop->iteration}}</td>
         <td>{{$data->name}}</td>
        </tr>
         @endforeach
    </tbody>
</table>
@endsection