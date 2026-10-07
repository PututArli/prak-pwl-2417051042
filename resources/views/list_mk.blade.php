@extends('layouts.app')

@section('content')
<style>
    .glass-table { width: 100%; border-collapse: separate; border-spacing: 0 15px; }
    .glass-table th { text-transform: uppercase; letter-spacing: 1px; color: #6b7280; padding: 15px; text-align: left; }
    .glass-table td { background: #ffffff; padding: 20px 15px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); }
    .glass-table td:first-child { border-top-left-radius: 12px; border-bottom-left-radius: 12px; }
    .glass-table td:last-child { border-top-right-radius: 12px; border-bottom-right-radius: 12px; }
    
    .btn-kreatif { padding: 8px 18px; border-radius: 30px; font-weight: bold; border: none; cursor: pointer; transition: all 0.3s ease; text-decoration: none; display: inline-block; font-size: 13px; }
    
    .btn-edit { background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: white; box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3); }
    .btn-edit:hover { transform: translateY(-3px); box-shadow: 0 6px 20px rgba(37, 99, 235, 0.6); color: white; }
    
    .btn-hapus { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; box-shadow: 0 4px 15px rgba(220, 38, 38, 0.3); }
    .btn-hapus:hover { transform: translateY(-3px); box-shadow: 0 6px 20px rgba(220, 38, 38, 0.6); color: white; }
    
    .alert-kece { background: linear-gradient(135deg, #10b981 0%, #059669 100%); color: white; padding: 18px 25px; border-radius: 12px; margin-bottom: 25px; box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3); animation: slideDown 0.5s ease-out; font-size: 15px; font-weight: 500; }
    
    @keyframes slideDown { from { transform: translateY(-20px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
</style>

<div class="container" style="background-color: #f3f4f6; padding: 40px; border-radius: 20px;">
    <h1 style="color: #1f2937; font-weight: 800; margin-bottom: 30px; font-size: 32px;">Daftar Mata Kuliah</h1>

    @if(session('success'))
        <div class="alert-kece">
            ✅ <strong>Berhasil!</strong> {{ session('success') }}
        </div>
    @endif

    <table class="glass-table">
        <thead>
            <tr>
                <th>ID / UUID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mks as $mk)
            <tr>
                <td style="font-family: monospace; color: #6b7280; font-size: 13px;">{{ $mk->id }}</td>
                <td style="font-weight: bold; color: #111827; font-size: 16px;">{{ $mk->nama_mk }}</td>
                <td style="color: #4b5563; font-weight: bold; font-size: 16px;">{{ $mk->sks }}</td>
                <td>
                    <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn-kreatif btn-edit">Edit</a>
                    
                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin mau hapus mata kuliah ini?')" class="btn-kreatif btn-hapus">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection