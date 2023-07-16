@extends('layouts.app')

@section('content')
    <h2>Data Produk
        <a class="btn  btn-sm float-end text-dark fw-semibold" href="{{ url('produk/create') }}"
            style="background-color: #f1c137;">Tambah Produk</a>
    </h2>
    <div class="row">
        @foreach ($rows as $row)
            <div class="col col-2" style="margin: 10px 90px 20px 0">
                <div class="card" style="width: 18rem;">

                    <img class="img-thumbnail" src="../resources/img/{{ $row->gambar->file_gambar }}" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <form class="position-absolute top-0 start-100 translate-middle   "
                            action="{{ url('produk/' . $row->produk_id) }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button class="badge bg-danger rounded-pill">X</button>
                        </form>
                        <h5 class="card-title text-center text-capitalize fw-bold">{{ $row->produk_nama }}</h5>
                        <p class="card-text text-center">{{ $row->kategori->kategori_barang }}</p>
                        <p class="card-text text-center text-danger">Rp.{{ $row->produk_harga }}</p>
                        <p class="card-text text-center text-secondary fw-light">{{ $row->produk_jumlah }} Stok yang
                            Tersedia
                        </p>
                        <a class="btn w-100 text-dark fw-semibold" style="background-color: #f1c137;"
                            href="{{ url('produk/' . $row->produk_id . '/edit') }}">Edit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
