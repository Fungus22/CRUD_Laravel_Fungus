@extends('layout')
@section('content')
<center>
    <h1>-- How about Fungi/Fungus --</h1>
    <a href="{{ route('fung.tambah') }}">Tambah Data Jamur</a>
    <table border="2">
        <thead>
            <tr>
                <th>NO</th>
                <th>Id Jamur</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Keterangan</th>
                <th>OPSI</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1; 
            @endphp

            @foreach($varian as $var)
            <tr>
                <th>{{ $no++ }}. </th>
                <th>{{ $var->id }}</th>
                <th>{{ $var->nama }}</th>
                <th>{{ $var->jenis }}</th>
                <th>{{ $var->keterangan }}</th>
                <th>
                    <a href="{{ url("/index/{$var->id}") }}">
                        <button>Edit</button>
                    </a>
                    <form action="{{ url("/index/{$var->id}") }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</center>
@endsection