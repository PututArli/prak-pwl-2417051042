<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.index') }}">Manajemen Akademik</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.index') }}">Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create') }}">Tambah Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matakuliah.index') }}">Mata Kuliah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>