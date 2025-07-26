@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-8">Kontak Kami</h1>

        <!-- Pesan sukses -->
        @if(session('success'))
            <div class="bg-green-500 text-white text-center py-3 px-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Formulir Kontak -->
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-xl">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <!-- Nama -->
                    <div class="mb-6">
                        <label for="name" class="block text-lg font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan nama lengkap" required>
                        @error('name')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email" required>
                        @error('email')
                            <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Subjek -->
                <div class="mb-6">
                    <label for="subject" class="block text-lg font-medium text-gray-700">Subjek</label>
                    <input type="text" id="subject" name="subject" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan subjek pesan" required>
                    @error('subject')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Pesan -->
                <div class="mb-6">
                    <label for="message" class="block text-lg font-medium text-gray-700">Pesan</label>
                    <textarea id="message" name="message" rows="6" class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tuliskan pesan Anda" required></textarea>
                    @error('message')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Kirim -->
                <div class="flex justify-center">
                    <button type="submit" class="w-full py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white font-semibold rounded-lg shadow-lg hover:from-blue-600 hover:to-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">
                        Kirim Pesan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
