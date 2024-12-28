<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Daftar Pendaftaran</title>
</head>
<body>
    <header class="bg-green-600 p-4 shadow-md">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold text-white">Ponpes Syafa'aturrasul</h1>
        </div>
    </header>
    <main class="container mx-auto p-6">
        <div class="bg-white p-4 rounded-lg shadow">
            
            <h1>Daftar Pendaftaran</h1>
            <a href="{{ route('pendaftaran.create') }}">Tambah Pendaftaran</a>
        
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pendaftarans as $pendaftaran)
                    <tr>
                        <td>{{ $pendaftaran->nama }}</td>
                        <td>{{ $pendaftaran->alamat }}</td>
                        <td>{{ $pendaftaran->jenis_kelamin }}</td>
                        <td>
                            <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}">Edit</a>
                            <form action="{{ route('pendaftaran.destroy', $pendaftaran->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    
    <footer class="bg-gray-800 p-4 mt-6 text-center text-white">
        <p>&copy; 2024 Laravel Application. All rights reserved.</p>
    </footer>
</body>
</html>
