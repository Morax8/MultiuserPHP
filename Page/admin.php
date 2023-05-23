<?php
require '../config/config.php';
$perpus = query("SELECT * FROM perpus");
?>
<!DOCTYPE html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, " />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/all.css" />
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/brands.css" />
    <link rel="stylesheet" href="../fontawesome-free-6.2.1-web/css/fontawesome.css" />


    <title>Admin</title>
</head>

<body>
    <div class="main">
        <div class="content">
            <div class="container">
                <h2>Data Peminjaman Buku PERPUSTAKAAN INTERNASIONAL</h2>
                <div class="table-responsive">
                    <table id="myTable" class="table table-striped custom-table">
                        <thead>
                            <tr>
                                <th scope="col">ID Buku</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Stok Buku</th>
                                <th scope="col">ID Peminjam</th>
                                <th scope="col">Peminjam</th>
                                <th scope="col">Tanggal Pinjam</th>
                                <th scope="col">Tanggal Kembali</th>
                                <th scope="col">aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($perpus as $per) : ?>
                                <tr scope="row">
                                    <td><?= $per["id_buku"]; ?></td>
                                    <td><?= $per["Judul_Buku"]; ?></td>
                                    <td><?= $per["pengarang"]; ?></td>
                                    <td><?= $per["penerbit"] ?></td>
                                    <td><?= $per["Stok_Buku"] ?></td>
                                    <td><?= $per["id_peminjam"]; ?></td>
                                    <td><?= $per["Peminjam"]; ?></td>
                                    <td><?= $per["tgl_pinjam"]; ?></td>
                                    <td><?= $per["tgl_kembali"]; ?></td>
                                    <td>
                                        <button onclick="btncncl('<?= $per["id_buku"]; ?>')" class="more">Delete</button>
                                    </td>
                                    <td>
                                        <button onclick="location.href='edit.php?id=<?= $per["id_buku"]; ?>'" class="more">Edit</button>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="JavaScript/main.js"></script>
</body>