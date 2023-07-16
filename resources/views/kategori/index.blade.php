<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <h2>Data Kategori Produk
            <a class="btn btn-sm float-end text-dark fw-bold" href="{{ url('kategori/create') }}"
                style="background-color: #f1c137;">Tambah Kategori
                Produk</a>
        </h2>
        <ol class="list-group list-group-numbered">
            @foreach ($rows as $row)
                <li
                    class="my-2 list-group-item d-flex justify-content-between align-items-start list-group-item-warning shadow-lg">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Kategori</div>
                        {{ $row->kategori_barang }}
                    </div>
                    <a class="badge bg-success rounded-pill me-3 text-decoration-none"
                        href="{{ url('kategori/' . $row->kategori_id . '/edit') }}">Edit
                    </a>
                    <form class="position-absolute top-0 start-100 translate-middle"
                        action="{{ url('kategori/' . $row->kategori_id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="badge bg-danger rounded-pill">x</button>
                    </form>
                </li>
            @endforeach
        </ol>
    @endsection

</body>

</html>
