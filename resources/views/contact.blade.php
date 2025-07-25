@extends('layouts.app')

@section('Contact Admin', 'contact.create')

@section('content')
    <h1 class="mb-2">Kontak admin</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    @if ($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('contact.store') }}">
        @csrf
        <div>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Masukan Nama"><br>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Masukan Email"><br>
            <input class="form-control" type="number" name="telepon" value="{{ old('telepon') }}" placeholder="Masukan No Telp"><br>
            <input class="form-control" type="text" name="message" value="{{ old('message') }}" placeholder="Masukan Pesan Anda"><br>
            <button type="submit" class="btn bg-red-500 btn-secondary">Kirim</button>
        </div>

    </form>
@endsection