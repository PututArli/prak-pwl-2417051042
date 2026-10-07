@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar User Mahasiswa</h1>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #c3e6cb;">
            <strong>Berhasil!</strong> {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: left; border-collapse: collapse;">
        <thead style="background-color: #f8f9fa;">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>
                    <a href="{{ route('user.edit', $u->id) }}" style="background-color: #0d6efd; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; font-weight: bold; margin-right: 5px;">Edit</a>
                    
                    <form action="{{ route('user.destroy', $u->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus data mahasiswa ini?')" style="background-color: #dc3545; color: white; border: none; padding: 6px 12px; border-radius: 4px; font-weight: bold; cursor: pointer;">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection