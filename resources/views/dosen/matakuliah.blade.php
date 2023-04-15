@extends('template/layout ')

@section('title')

    Halaman Karya

@endsection

@section('isi')

    <h1>{{$salam}}</h1>
    <h1>ini halaman matkul</h1>

    @if (count($matkul)>0)
    <ul>
        @foreach($matkul as $matakuliah)
        <li>
        {{$matakuliah}}
        </li>
        @endforeach
    </ul>
    @endif

@endsection