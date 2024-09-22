<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="p-3">
    <h1>Daftar Buku</h1>
    <a href="{{ route('buku.create') }}" class="btn btn-primary float-end mb-2">Tambah Buku</a>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_book as $buku)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $buku->id }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp".number_format($buku->harga, 2, ',', '.') }}</td>
                <td>{{ $buku->tgl_terbit }}</td>
                <td>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm ('Sure to delete this book?')" type="submit"
                        class="btn btn-danger">Hapus</button>
                    </form>
                    <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-primary mt-2">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Jumlah Buku: {{  $jumlah_buku }}</h3>
    <h3>Total Harga: {{ "Rp".number_format($total_harga, 2,  ',', '.') }}</h3>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

