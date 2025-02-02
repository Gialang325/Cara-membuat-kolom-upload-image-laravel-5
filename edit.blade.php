<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="mb-4">Edit Data Siswa</h1>
        
        <form action="{{ route('projek.update', $projek->id) }}" method="POST" class="bg-white p-4 shadow-sm rounded" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @if($projek->foto)
            <div class="mb-3">
                <label for="foto" class="form-label">Gambar Saat Ini:</label>
                <div>
                    <img src="{{ asset('storage/images/projek/' . $projek->foto) }}" alt="Foto Siswa" class="img-thumbnail" style="max-width: 150px;">
                </div>
            </div>
            @endif

            <div class="mb-3">
                <label for="foto" class="font-weight-bold">Foto</label>
                <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                @error('foto')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $projek->nama }}" required>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas:</label>
                <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $projek->kelas }}" required>
            </div>

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan:</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{ $projek->jurusan }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('projek.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>
