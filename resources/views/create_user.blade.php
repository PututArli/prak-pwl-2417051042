@extends('layouts.app')

@section('content')
<style>
    .modern-form { background: #ffffff; padding: 40px; border-radius: 16px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04); max-width: 500px; margin: 40px auto; border: 1px solid #f3f4f6; }
    .input-grup { margin-bottom: 24px; }
    .label-modern { display: block; font-weight: 600; margin-bottom: 8px; color: #374151; font-size: 14px; }
    .input-modern { width: 100%; padding: 14px 16px; border: 1.5px solid #e5e7eb; border-radius: 10px; font-size: 15px; transition: all 0.2s; box-sizing: border-box; background: #f9fafb; color: #111827; }
    .input-modern:focus { border-color: #3b82f6; outline: none; background: #ffffff; box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1); }
    .btn-simpan { width: 100%; background: #111827; color: white; padding: 16px; border: none; border-radius: 10px; font-weight: 600; font-size: 15px; cursor: pointer; transition: background 0.2s; margin-top: 10px; }
    .btn-simpan:hover { background: #374151; }
</style>

<div class="modern-form">
    <h2 style="margin-top: 0; color: #111827; font-weight: 800; margin-bottom: 30px; font-size: 24px;">Tambah Mahasiswa</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        
        <div class="input-grup">
            <label for="name" class="label-modern">Nama Lengkap</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="input-modern" required autocomplete="off">
        </div>
        
        <div class="input-grup">
            <label for="email" class="label-modern">Alamat Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" class="input-modern" required autocomplete="off">
        </div>

        <div class="input-grup">
            <label for="password" class="label-modern">Password</label>
            <input type="password" id="password" name="password" class="input-modern" required>
        </div>
        
        <button type="submit" class="btn-simpan">Simpan Data</button>
    </form>
</div>
@endsection