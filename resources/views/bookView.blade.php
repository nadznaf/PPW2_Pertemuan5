<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
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
                <td>Edit</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Jumlah Buku: {{  $jumlah_buku }}</h3>
    <h3>Total Harga: {{ "Rp".number_format($total_harga, 2,  ',', '.') }}</h3>

</body>
</html>

