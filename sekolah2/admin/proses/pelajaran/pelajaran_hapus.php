<?php
require('proses/logindulu.php');
$id = $_GET['id'];

$query_hapus = $koneksi->query("DELETE FROM db_pelajaran WHERE id_pelajaran='$id'");

if ($query_hapus) {
?>
    <script>
        window.alert('Data Berhasil Dihapus!!');
        window.location.href = 'index.php?page=pelajaran';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Dihapus!!');
        window.location.href = 'index.php?page=pelajaran';
    </script>
<?php
}
?>