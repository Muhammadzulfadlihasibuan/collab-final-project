 @extends('layout.master')

@section('title')
test
@endssection

@section('title2')
test
@endssection

@section('content')
    <h1>List of Barang</h1>
    <a href="{{ route('barang.create') }}">Create New Barang</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Pemasok</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->kategori->nama_kategori }}</td>
                    <td>{{ $barang->pemasok->nama_pemasok }}</td>
                    <td>
                        <a href="{{ route('barang.show', $barang) }}">View</a>
                        <a href="{{ route('barang.edit', $barang) }}">Edit</a>
                        <form action="{{ route('barang.destroy', $barang) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
