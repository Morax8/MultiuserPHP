<?php
require '../config/koneksi.php';
$id_buku = $_GET['id_buku'];

$perpus = query("select * from perpus WHERE id_buku =$id_buku")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/tamdit.css" />
    <link rel="stylesheet" href="../dist/sweetalert2.css">
    <script src="../dist/sweetalert2.js"></script>
    <script src="../JavaScript/main.js"></script>
    <title>Edit</title>
</head>

<body>
    <h2 align="center">Edit Employee Data</h2>
    <table border="1" align="center" cellpadding="5" cellspacing="1">
        <form action="" method="post">
            <tr>
                <td colspan="2"><input type="hidden" name="ID" id="ID" required value="<?= $perpus["id_buku"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="Nama">Judul </label></td>
                <td><input type="text" name="Judul" id="Nama" required value="<?= $perpus["Judul_Buku"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="Nama">Pengarang </label></td>
                <td><input type="text" name="Pengarang" id="JK" required value="<?= $perpus["Pengarang"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Penerbit </label></td>
                <td><input type="text" name="" id="Penerbit" required value="<?= $perpus["penerbit"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">ID Peminjam </label></td>
                <td><input type="text" name="ID_Peminjam" id="tglhr" required value="<?= $perpus["id_peminjam"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Stok Buku </label></td>
                <td><input type="text" name="stok_buku" id="Alamat" required value="<?= $perpus["Stok_Buku"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Peminjam </label></td>
                <td><input type="text" name="Peminjam" id="Jabatan" required value="<?= $perpus["Peminjam"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="alamat">Tgl Pinjam </label></td>
                <td><input type="text" name="tgl_pinjam" id="MasaKontrak" required value="<?= $perpus["tgl_pinjam"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Tgl kembali </label></td>
                <td><input type="text" name="tgl_kembali" id="email" required value="<?= $perpus["tgl_kembali"]; ?>"></td>
            </tr>

            <td colspan="3" align="center"><button type="submit" name="submit">Edit Data</button></td>
            </tr>
        </form>
    </table>
    <br>
    <br>
    <form action="../Page/admin.php" align="center">
        <button type="submit">Back to Admin Page</button>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        if (edit_data($_POST) > 0) {
    ?>
            <script>
                Swal.fire({
                    title: "Edit Data",
                    text: "Edit Data Succesfull",
                    icon: "success",
                    timer: 1000
                }).then((result) => {
                    location.href = "../Page/admin.php";
                });
            </script>
        <?php
        } else {
        ?>
            <script>
                Swal.fire({
                    title: "Failed",
                    text: "Failed to Edit Data!",
                    icon: "warning",
                    timer: 1000
                }).then((result) => {
                    location.href = "../Page/admin.php";
                });
            </script>
    <?php
        }
    }
    ?>
</body>

</html>