@extends('layout.master')

@section('title')
test
@endssection

@section('title2')
test
@endssection

@section('content')
    <h1>Create New Barang</h1>
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" required>
        <label>Stok:</label>
        <input type="text" name="stok" required>
        <label>Harga:</label>
        <input type="text" name="harga" required>
        <label>Pemasok ID:</label>
        <input type="text" name="pemasok_id" required>
        <button type="submit">Submit</button>
    </form>
@endsection
