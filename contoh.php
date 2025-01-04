<?php
$host = "localhost"; // Ganti dengan host database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "geocam"; // Ganti dengan nama database Anda

// Membuat koneksi
$koneksi = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

$sql = "SELECT * FROM tb_geocam";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Lakukan sesuatu dengan data, misalnya simpan dalam array
        $tb_geocam[] = $row;
    }
} else {
    echo "Tidak ada data yang ditemukan";
}

$koneksi->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data dari Database</title>
</head>
<body onload="tampilkanData()">
    <table id="tabelData">
        <!-- Tabel akan diisi oleh JavaScript -->
    </table>

    <script>
        function tampilkanData() {
            // Mengambil data dari PHP dan mengisinya ke dalam tabel
            var data = <?php echo json_encode($tb_geocam); ?>;
            var tabel = document.getElementById("tabelData");

            for (var i = 0; i < data.length; i++) {
                var row = tabel.insertRow(i);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                cell1.innerHTML = data[i].nama_produk;
                cell2.innerHTML = data[i].harga;
            }
        }
    </script>
</body>
</html>