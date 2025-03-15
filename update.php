<!-- BUAT FUNGSI EDIT DATA ( ketika data berhasil di tambahkan maka akan dialihkan ke halaman katalog buku) --><?php
require "./connect.php";

if (isset($_POST["update"])) {
    $id = $_POST["id"];

    $judulName = $_POST["judul_buku"];
    $penulisName = $_POST["penulis_buku"];
    $tahunTerbitName = $_POST["tahun_terbit"];
    

    // sql query
    $query = "UPDATE tb_buku SET
            judul_buku='$judulName',
            penulis_buku='$penulisName',
            tahun_terbit='$tahunTerbitName',
            WHERE id=$id";

    $test = mysqli_query($conn, $query);


    if (mysqli_affected_rows($conn) > 0) {
        header("Location: list_mobil.php");
    } else {
        echo "
        <script>
            alert('Data failed');
            document.location.href = list_mobil.php;
        </script>
        ";
        exit;
    }
}
