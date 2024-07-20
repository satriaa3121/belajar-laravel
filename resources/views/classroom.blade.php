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
            <th>Students</th>
        </tr>
    </thead>
    <tbody>
        <tr>
         @foreach($classList as $data)
         <td>{{$loop->iteration}}</td>
         <td>{{$data->name}}</td>
         <td>
            @foreach ($data->students as $students)
            {{$students['name']}}

            @endforeach
            </td>
        </tr>
         @endforeach
    </tbody>
</table>
@endsection