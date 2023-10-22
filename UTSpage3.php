

<!DOCTYPE html>
<html>
    <head>
        <title>Navbar</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>
</html>

<body>
    <nav>
        <div class="logo">
            <a href="#"><img src="LogoITERA2.png" alt="logo"><br>Program Administrasi dan Manajemen Mahasiswa ITERA prodi Teknik Informatika</a>
            </div>
            <div class="toggle">
    
            </div>
            <ul class="menu">
                <li><a href="UTSpage2.php">Halaman Formulir</a></li>
                <li><a href="UTSpage3.php">Halaman Tabel</a></li>
            </ul>
    </nav>  

    <br>
    <div id="container">
        <div class="item"><h1>Halaman Tabel</h1>
    <br>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Nim</td>
            <td>Prodi</td>
            <td>email</td>
            <td>password</td>
            <td>Jenis Kelamin</td>
            <td>Tanggal lahir</td>
            <td>Alamat</td>
        </tr>
        <?php
        $warnaGenap = "#808080";
        $warnaGanjil = "#FFFFFF";
        $no=1;
        $koneksi=mysqli_connect("localhost","root", "","data_mahasiswa2");
        $data_mahassiswa2=mysqli_query($koneksi, "SELECT * FROM data_mahassiswa2
            ORDER BY nama ASC");
        $counter = 1;
        while($tampil_mhs=mysqli_fetch_array($data_mahassiswa2)){
            if ($counter % 2 == 0) $warna = $warnaGenap;
            else $warna = $warnaGanjil;
        ?>
        <tr>
        <?php
        $counter++;
        ?> 
            <td><?= $no++; ?>.</td>
            <td><?= $tampil_mhs['nama']; ?></td>
            <td><?= $tampil_mhs['nim']; ?></td>
            <td><?= $tampil_mhs['prodi']; ?></td>
            <td><?= $tampil_mhs['email']; ?></td>
            <td><?= $tampil_mhs['password']; ?></td>
            <td><?= $tampil_mhs['jeniskelamin']; ?></td>
            <td><?= $tampil_mhs['tanggallahir']; ?></td>
            <td><?= $tampil_mhs['alamat']; ?></td>
        </tr>
        <?php } ?>
        </table>
</body>

<style>
    footer {
        text-align: center;
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: 2px solid #fff;
</style>
<footer>
    &copy; 20 Oktober 2023 Tamara Dwi Rahmadhona
</footer>
