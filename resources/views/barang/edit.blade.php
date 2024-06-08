@extends('layout.master')

@section('title')
test
@endssection

@section('title2')
test
@endssection

@section('content')
    <h1>Edit Barang</h1>
    <form action="{{ route('barang.update', $barang) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required>
        <label>Stok:</label>
        <input type="text" name="stok" value="{{ $barang->stok }}" required>
        <label>Harga:</label>
        <input type="text" name="harga" value="{{ $barang->harga }}" required>
        <label>Kategori ID:</label>
        <input type="text" name="kategori_id" value="{{ $barang->kategori_id }}" required>
        <label>Pemasok ID:</label>
        <input type="text" name="pemasok_id" value="{{ $barang->pemasok_id }}" required>
        <button type="submit">Submit</button>
    </form>
@endsection
