@extends('layout')
@section('content')
<center>
    <h1>Edit Data Jamur</h1>

    <a href="{{ route('fung.index') }}">Kembali ke Menu awal</a>
    <form action="{{ route('fung.memperbarui', $varian->id) }}" method="post">
        @method('put')    
        @csrf
        <div>
            <label for="nama">Nama</label>
            <input type="hidden" value="{{ $varian->id }}" name="id" id="id">
            <input type="text" name="nama" id="nama" value="{{ $varian->nama }}" required>
        </div>
        <br>
        <div>
            <label for="nama">Jenis</label>
            <input type="text" id="jenis" name="jenis" value="{{ $varian->jenis }}" required>
        </div>
        <br>
        <div>
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" type="text">{{ $varian->keterangan }}</textarea>
        </div>
        <button type="submit">Simpan</button>
    </form>
</center>

@endsection