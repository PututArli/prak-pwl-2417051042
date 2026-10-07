@extends('layouts.app')

@section('content')
<style>
    .glass-table { width: 100%; border-collapse: separate; border-spacing: 0 15px; }
    .glass-table th { text-transform: uppercase; letter-spacing: 1px; color: #6b7280; padding: 15px; text-align: left; }
    .glass-table td { background: #ffffff; padding: 20px 15px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); }
    .glass-table td:first-child { border-top-left-radius: 12px; border-bottom-left-radius: 12px; }
    .glass-table td:last-child { border-top-right-radius: 12px; border-bottom-right-radius: 12px; }
    
    .btn-kreatif { padding: 10px 22px; border-radius: 30px; font-weight: bold; border: none; cursor: pointer; transition: all 0.3s ease; text-decoration: none; display: inline-block; font-size: 14px; }
    
    .btn-edit { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; box-shadow: 0 4px 15px rgba(118, 75, 162, 0.3); }
    .btn-edit:hover { transform: translateY(-3px); box-shadow: 0 6px 20px rgba(118, 75, 162, 0.6); color: white; }
    
    .btn-hapus { background: linear-gradient(135deg, #ff0844 0%, #ffb199 100%); color: white; box-shadow: 0 4px 15px rgba(255, 8, 68, 0.3); }
    .btn-hapus:hover { transform: translateY(-3px); box-shadow: 0 6px 20px rgba(255, 8, 68, 0.6); color: white; }
    
    .alert-kece { background: linear-gradient(135deg, #0ba360 0%, #3cba92 100%); color: white; padding: 18px 25px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 4px 15px rgba(11, 163, 96, 0.3); animation: slideDown 0.5s ease-out; font-size: 16px; font-weight: 500; }
    
    @keyframes slideDown { from { transform: translateY(-20px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
</style>

<div class="container" style="background-color: #f8f9fa; padding: 40px; border-radius: 20px;">
    <h1 style="color: #1f2937; font-weight: 800; margin-bottom: 30px; font-size: 32px;">Data Mahasiswa</h1>

    @if(session('success'))
        <div class="alert-kece">
            🎉 <strong>Sukses!</strong> {{ session('success') }}
        </div>
    @endif

    <table class="glass-table">
        <thead>
            <tr>
                <th>UUID</th>
                <th>Nama Lengkap</th>
                <th>Alamat Email</th>
                <th>Aksi Super</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <td style="font-family: monospace; color: #4b5563; font-size: 13px;">{{ $u->id }}</td>
                <td style="font-weight: 600; color: #111827; font-size: 16px;">{{ $u->name }}</td>
                <td style="color: #4b5563;">{{ $u->email }}</td>
                <td>
                    <a href="{{ route('user.edit', $u->id) }}" class="btn-kreatif btn-edit">Ubah Data</a>
                    
                    <form action="{{ route('user.destroy', $u->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Data akan dihapus permanen. Lanjutkan?')" class="btn-kreatif btn-hapus">Musnahkan</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection