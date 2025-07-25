@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <h1>Gallery</h1>
    <p>Berikut adalah beberapa gambar yang kami tampilkan.</p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400" class="card-img-top" alt="Gambar 1">
                <div class="card-body">
                    <h5 class="card-title">Gambar 1</h5>
                    <p class="card-text">Deskripsi gambar pertama.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400" class="card-img-top" alt="Gambar 2">
                <div class="card-body">
                    <h5 class="card-title">Gambar 2</h5>
                    <p class="card-text">Deskripsi gambar kedua.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/400" class="card-img-top" alt="Gambar 3">
                <div class="card-body">
                    <h5 class="card-title">Gambar 3</h5>
                    <p class="card-text">Deskripsi gambar ketiga.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
