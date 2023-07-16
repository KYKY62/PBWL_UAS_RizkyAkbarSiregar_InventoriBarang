@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Kategori Produk</h3>
        <form action="{{ url('/kategori/' . $row->kategori_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Kategori Produk</label>
                <input type="text" class="form-control" name="kategori_barang" value="{{ $row->kategori_barang }}"></>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary btn-sm float-none" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
