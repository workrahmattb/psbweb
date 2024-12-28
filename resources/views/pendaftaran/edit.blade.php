<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Pendaftaran</title>
</head>
<body>
    <h1>Edit Pendaftaran</h1>

    <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="{{ $pendaftaran->nama }}" required><br>
        
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" required>{{ $pendaftaran->alamat }}</textarea><br>
        
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" name="jenis_kelamin" value="{{ $pendaftaran->jenis_kelamin }}" required><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
