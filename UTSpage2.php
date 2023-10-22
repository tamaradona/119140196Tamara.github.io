<?php
    $koneksi=mysqli_connect("localhost","root", "","data_mahasiswa2");
    if(isset($_POST['simpan'])){
        $nama=mysqli_real_escape_string($koneksi, $_POST['nama']);
        $nim=mysqli_real_escape_string($koneksi, $_POST['nim']);
        $prodi=mysqli_real_escape_string($koneksi, $_POST['prodi']);
        $email=mysqli_real_escape_string($koneksi, $_POST['email']);
        $password=mysqli_real_escape_string($koneksi, $_POST['password']);
        $jeniskelamin=mysqli_real_escape_string($koneksi, $_POST['jeniskelamin']);
        $tanggallahir=mysqli_real_escape_string($koneksi, $_POST['tanggallahir']);
        $alamat=mysqli_real_escape_string($koneksi, $_POST['alamat']);
        $simpan=mysqli_query($koneksi,"INSERT INTO data_mahassiswa2 VALUES('$nama','$nim','$prodi','$email','$password','$jeniskelamin','$tanggallahir','$alamat')");

        if($simpan){
            echo "<script>window.alert('Data Mahasiswa berhasil disimpan')
            window.location='UTS.php'</script>";
        }
        else{
            echo "<script>window.alert('Data Mahasiswa gagal disimpan')
            window.location='UTS.php'</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Navbar</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
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
        <div class="item"><h1>Halaman Formulir</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        <input type="text" placeholder="nama" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        NIM
                    </td>
                    <td>
                        <input type="text" placeholder="NIM" name="nim" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        prodi
                    </td>
                    <td>
                        <input type="text" placeholder="prodi" name="prodi" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        email
                    </td>
                    <td>
                        <input type="text" placeholder="email" name="email" optional>
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                    </td>
                    <td>
                        <input type="text" placeholder="" name="password" optional>
                    </td>
                </tr>
                <tr>
                    <td>
                        jenis kelamin
                    </td>
                    <td>
                        <input type="text" placeholder="" name="jeniskelamin" optional>
                    </td>
                </tr>
                <tr>
                    <td>
                       tanggal lahir
                    </td>
                    <td>
                        <input type="date" placeholder="" name="tanggallahir" optional>
                    </td>
                </tr>
                <tr>
                    <td>
                        alamat
                    </td>
                    <td>
                        <input type="text" placeholder="" name="alamat" optional>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="simpan" value="submit">
                    </td>
                    <td></td>
                </tr>
            </form>
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
