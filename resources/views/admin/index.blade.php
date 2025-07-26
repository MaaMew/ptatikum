<h2>Daftar Admin</h2>

@if(session('success'))
    <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
@endif

<table class="table table-striped" style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <thead>
        <tr>
            <th style="padding: 10px; background-color: #f1f1f1; border: 1px solid #ddd;">ID</th>
            <th style="padding: 10px; background-color: #f1f1f1; border: 1px solid #ddd;">Nama</th>
            <th style="padding: 10px; background-color: #f1f1f1; border: 1px solid #ddd;">Email</th>
            <th style="padding: 10px; background-color: #f1f1f1; border: 1px solid #ddd;">No.Hp</th>
            <th style="padding: 10px; background-color: #f1f1f1; border: 1px solid #ddd;">Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach($admins as $admin)
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $admin->id }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $admin->name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $admin->email }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $admin->phone }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $admin->role }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
