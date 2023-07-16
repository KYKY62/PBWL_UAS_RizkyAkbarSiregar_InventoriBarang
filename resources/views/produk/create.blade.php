@extends('layouts.app')

@section('content')
    <h2>Input Data Produk</h2>

    <form action="{{ url('/produk') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Nama Produk</label>
            <input type="text" name="produk_nama" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Jumlah Produk</label>
            <input type="text" name="produk_jumlah" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Harga Produk</label>
            <input type="text" name="produk_harga" class="form-control">
        </div>
        <div class="input-group my-3">
            <label class="input-group-text" for="inputGroupSelect01">Gambar</label>
            <select class="form-select" id="inputGroupSelect01" name="produk_id_gambar" id="produk_id_gambar">
                <option selected>Pilih Gambar..</option>
                @foreach ($rowGambar as $Item)
                    <option value="{{ $Item->gambar_id }}">{{ $Item->file_gambar }}</option>
                @endforeach
            </select>
        </div>
        <div class="input-group my-3">
            <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
            <select class="form-select" id="inputGroupSelect01" name="produk_id_kategori" id="produk_id_kategori">
                <option selected>Pilih Kategori..</option>
                @foreach ($rowKategori as $Item)
                    <option value="{{ $Item->kategori_id }}">{{ $Item->kategori_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
@endsection
