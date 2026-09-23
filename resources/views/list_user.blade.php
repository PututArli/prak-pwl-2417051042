@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 mt-3">
    <h2 class="fw-bold">Daftar Pengguna</h2>
    <a href="{{ route('user.create') }}" class="btn btn-success">+ Tambah Data</a>
</div>

<div class="card shadow-sm p-3">
    @include('components.user-table', ['users' => $users])
</div>
@endsection