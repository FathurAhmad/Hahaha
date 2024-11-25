@extends('layouts')

@section('content')
    <div class="container">
        <h1>Edit Buku</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('buku.update', '$buku->id') }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" value="{{ '$buku->judul' }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" name="penulis" value="{{ '$buku->penulis' }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="number" class="form-control" name="tahun_terbit" value="{{ '$buku->tahun_terbit' }}"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" value="{{ '$buku->harga' }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control" name="stok" value="{{ '$buku->stok' }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('buku.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
