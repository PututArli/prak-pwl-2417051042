<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Manajemen Mahasiswa</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user') }}">List Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.create') }}">Tambah Data</a>
                </li>
            </ul>
        </div>
    </div>
</nav>