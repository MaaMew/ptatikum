<h2>Daftar Admin</h2>

@if(session('success'))
    <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
@endif

<table class="table table-striped" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No.Hp</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach($admins as $admin)
            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->phone }}</td>
                <td>{{ $admin->role }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
