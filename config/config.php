<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_pwpb";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "db_pwpb");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $perpus = [];
    while ($perpus = mysqli_fetch_assoc($result)) {
        $perpusi[] = $perpus;
    }
    return $perpusi;
}
?>

<?php
function tambah($perpus)
{
    global $conn;
    $id_buku = $perpus["id_buku"];
    $Judul_Buku = $perpus["Judul_Buku"];
    $pengarang = $perpus["pengarang"];
    $penerbit = $perpus["penerbit"];
    $id_peminjam = $perpus["id_peminjam"];
    $stok_buku = $perpus["stok_buku"];
    $peminjam = $perpus["peminjam"];
    $tgl_pinjam = $perpus["tgl_pinjam"];
    $tgl_kembali = $perpus["tgl_kembali"];

    $query = "INSERT INTO `perpus`(`id_buku`, `Judul_Buku`, `pengarang`,`penerbit`, `id_peminjam`,`stok_buku`, `Nama_peminjam`, `tgl_pinjam`, `tgl_kembali`)
                VALUES
                ('$id_buku', '$Judul_Buku', '$pengarang','$penerbit', '$id_peminjam','$stok_buku', '$peminjam', '$tgl_pinjam', '$tgl_kembali')
                ";

    $query_exe = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if ($query_exe) {
        return true;
    }
    return false;
}
?>

<?php
function hapus_data($id_buku)
{
    global $conn;

    $query = "delete from perpus where id_buku ='$id_buku'";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>

<?php
function edit_data($perpus)
{
    global $conn;

    var_dump($perpus);

    $id_buku = $perpus["id_buku"];
    $Judul_Buku = $perpus["Judul_Buku"];
    $pengarang = $perpus["pengarang"];
    $penerbit = $perpus["penerbit"];
    $id_peminjam = $perpus["id_peminjam"];
    $stok_buku = $perpus["stok_buku"];
    $peminjam = $perpus["peminjam"];
    $tgl_pinjam = $perpus["tgl_pinjam"];
    $tgl_kembali = $perpus["tgl_kembali"];


    $query = "update data_pegawai set 
                id_buku = '$id_buku',
                Judul_Buku = '$Judul_Buku',
                pengarang = '$pengarang',
                penerbit = '$penerbit',
                id_peminjam = '$id_peminjam',
                stok_buku = '$stok_buku',
                peminjam = '$peminjam',
                tgl_pinjam = '$tgl_pinjam',
                tgl_kembali = '$tgl_kembali'
                WHERE id_buku = '$id_buku'
                  ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
