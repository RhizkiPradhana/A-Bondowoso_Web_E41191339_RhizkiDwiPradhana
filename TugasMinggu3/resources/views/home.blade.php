@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="contaigner">
            <h1 class="display-4">Halaman Home</h1>
            <p class="lead">This Is Home Page</p>
        </div>
        <p>Nama : {{ $nama }}</p>
        <p>Mata Pelajaran</p>
        <ul>
            @foreach($pelajaran as $p)
            <li> {{$p}} </li>
            @endforeach
    </div>
@endsection