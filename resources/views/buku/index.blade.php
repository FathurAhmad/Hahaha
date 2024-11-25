@extends('layouts')

@section('content')
    <div class="container">
        <h1>Daftar Buku</h1>
        <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bukus as $buku)
                    <tr>
                        <td>{{ $buku->id }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->penulis }}</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                        <td>{{ $buku->harga }}</td>
                        <td>{{ $buku->stok }}</td>
                        <td>
                            <a href="{{ route('buku.show', '$buku->id') }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('buku.edit', '$buku->id') }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('buku.destroy', '$buku->id') }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
