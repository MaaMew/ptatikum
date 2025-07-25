<h2>Formulir Tambah Admin</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

@if($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('admin.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nama" value="{{ old('name') }}"><br>
    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"><br>
    <input type="text" name="phone" placeholder="No.Hp" value="{{ old('phone') }}"><br>
    <select name="role">
        <option value="super_admin" {{ old('role') == 'super_admin' ? 'selected' : '' }}>Super Admin</option>
        <option value="kasir" {{ old('role') == 'kasir' ? 'selected' : '' }}>Kasir</option>
    </select><br>
    <button type="submit">Simpan</button>
</form>
