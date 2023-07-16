@extends('layouts.app')

@section('content')
    <h2>Input Data Kategori Produk</h2>

    <form action="{{ url('/kategori') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Nama Kategori</label>
            <input type="text" name="kategori_barang" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
@endsection
