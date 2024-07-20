@extends('layout.mainlayout')

@section('title', 'Students')

@section('content')
<div class="container">
<h1>Ini Halaman students</h1>
<h3>Student List</h3>

<table class="table">
    <thead>
        <tr>
        <th>#</th>
        <th> Name</th>
        <th>gender</th>
        <th>nis</th>
        <th>Class</th>
        <th>Extracurricular</th>
    </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->gender}}</td>
                <td>{{$data->nis}}</td>
                <td>{{$data->class['name']}}</td>
                <td>
                    @foreach ($data->extracurriculars as $item)
                       - {{$item->name}} <br>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
</div>
@endsection