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