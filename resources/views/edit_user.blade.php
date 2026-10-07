@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Mahasiswa</h1>
    
    <form action="{{ route('user.update', $user->id) }}" method="POST" style="max-width: 400px;">
        @csrf
        @method('PUT')
        
        <div style="margin-bottom: 15px;">
            <label for="name" style="font-weight: bold;">Nama Mahasiswa:</label><br>
            <input type="text" id="name" name="name" value="{{ $user->name }}" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        
        <div style="margin-bottom: 15px;">
            <label for="email" style="font-weight: bold;">Email:</label><br>
            <input type="email" id="email" name="email" value="{{ $user->email }}" required style="width: 100%; padding: 8px; margin-top: 5px;">
        </div>
        
        <button type="submit" style="background-color: #198754; color: white; padding: 10px 15px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer; width: 100%;">Update Data</button>
    </form>
</div>
@endsection