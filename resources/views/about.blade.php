@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <!-- Header -->
        <header class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-4">Tentang Kami</h1>
            <p class="text-lg text-gray-600">Kami adalah perusahaan yang berkomitmen untuk memberikan layanan terbaik dan inovatif.</p>
        </header>

        <!-- Visi & Misi -->
        <section class="mb-12">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Visi & Misi</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <!-- Visi -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Visi</h3>
                    <p class="text-gray-600">Menjadi pemimpin dalam industri kami dengan inovasi berkelanjutan dan layanan pelanggan yang luar biasa.</p>
                </div>
                <!-- Misi -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Misi</h3>
                    <p class="text-gray-600">Memberikan solusi terbaik yang memenuhi kebutuhan pelanggan dan berkontribusi positif terhadap masyarakat.</p>
                </div>
            </div>
        </section>

        <!-- Tim Kami -->
        <section>
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Tim Kami</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Anggota Tim -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="https://via.placeholder.com/150" alt="Anggota Tim" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Nama Anggota</h3>
                    <p class="text-gray-600">Posisi</p>
                </div>
                <!-- Anggota Tim -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="https://via.placeholder.com/150" alt="Anggota Tim" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Nama Anggota</h3>
                    <p class="text-gray-600">Posisi</p>
                </div>
                <!-- Anggota Tim -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="https://via.placeholder.com/150" alt="Anggota Tim" class="w-32 h-32 mx-auto rounded-full mb-4">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Nama Anggota</h3>
                    <p class="text-gray-600">Posisi</p>
                </div>
            </div>
        </section>
    </div>
@endsection
