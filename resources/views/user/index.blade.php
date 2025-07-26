<h2>Form Tambah User</h2>

@if(session('success'))
    <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
@endif

@if($errors->any())
    <ul style="color: red; list-style-type: none; padding: 0;">
        @foreach ($errors->all() as $error)
            <li style="margin-bottom: 5px;">&#10071; {{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('user.store') }}" style="max-width: 400px; margin: auto; padding: 20px; border-radius: 8px; background-color: #f4f4f9; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    @csrf
    <div style="margin-bottom: 15px;">
        <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; box-sizing: border-box;">
    </div>
    <div style="margin-bottom: 15px;">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; box-sizing: border-box;">
    </div>
    <div style="margin-bottom: 15px;">
        <input type="password" name="password" placeholder="Password" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; box-sizing: border-box;">
    </div>
    <div style="margin-bottom: 20px;">
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; box-sizing: border-box;">
    </div>
    <button type="submit" style="width: 100%; padding: 12px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Simpan</button>
</form>
