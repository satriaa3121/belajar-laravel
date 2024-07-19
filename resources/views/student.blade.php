@extends('layout.mainlayout')

@section('title', 'Students')

@section('content')
<div class="container">
<h1>Ini Halaman students</h1>
<h3>Student List</h3>
<ol>
    @foreach ($studentList as $data)
    <li>{{$data->name}} 
        | {{$data->gender}}
        | {{$data->nis}}
        | {{$data->class}}
    </li>
    @endforeach
</ol>
</div>
@endsection