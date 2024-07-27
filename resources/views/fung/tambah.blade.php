@extends('layout')
@section('content')
<center>
    <h1>Tambah Data Jamuran</h1>
    <a href="{{ route('fung.index') }}">Kembali ke Menu awal</a>
    <form action="{{ route('fung.menambah') }}" method="post">
        @csrf
        <div>
            <label for="nama">Nama Jamur</label>
            <input type="text" id="nama" name="nama" placeholder="masukan nama jamur tsb" required>
        </div>
        <br>
        <div>
            <label for="jenis">Jenis Jamur</label>
            <input type="text" id="jenis" name="jenis" placeholder="masukan jenis jamur tsb" required>
        </div>
        <br>
        <div>
            <label for="keterangan">Keterangan</label>
            <textarea type="text" id="keterangan" name="keterangan" placeholder="masukan keterangan tentang jamur tsb" required></textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
</center>
@endsection