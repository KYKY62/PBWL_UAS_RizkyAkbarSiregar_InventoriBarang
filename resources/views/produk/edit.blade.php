@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Produk</h3>
        <form class="row g-3 mt-3" action="{{ url('/produk/' . $row->produk_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="inputEmail4" name="produk_nama" value="{{ $row->produk_nama }}">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Jumlah Produk</label>
                <input type="text" class="form-control" id="inputPassword4" name="produk_jumlah"
                    value="{{ $row->produk_jumlah }}">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Harga Produk</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="produk_harga"
                    value="{{ $row->produk_harga }}">
            </div>
            <div class="col-12">
                <label for="inputGambar" class="form-label">Gambar</label>
                <select class="form-select" id="inputGroupSelect01" name="produk_id_gambar" id="produk_id_gambar">
                    <option selected>Pilih Gambar...</option>
                    @foreach ($rowGambar as $item)
                        <option value="{{ $item->gambar_id }}">{{ $item->file_gambar }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12">
                <label for="inputCity" class="form-label">Kategori</label>
                <select id="inputState" class="form-select" name="produk_id_kategori" id="produk_id_kategori">
                    <option selected>Pilih Kategori...</option>
                    @foreach ($rowKategori as $item)
                        <option value="{{ $item->kategori_id }}">{{ $item->kategori_barang }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <input class="btn btn-success btn-sm float-none w-100" type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
