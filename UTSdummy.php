<?php
$koneksi = mysqli_connect("localhost", "root", "", "data_mahasiswa2");

// Data Dummy
$data_mahasiswa = array(
    array("Andri", "123456789", "Teknik Informatika", "Andri789@email.com", "selidiki", "Laki-laki", "2000-12-01", " "),
    array("Nurmala", "987654321", "Teknik Informatika", "Nurmala321@email.com", "Nurmalacans", "Perempuan", "2001-02-02", "Gang Tomat"),
    array("Kevin", "111111111", "Teknik Informatika", "Kevin111@email.com", "Kevin030301", "Laki-laki", "2001-03-03", "Garden Hills"),
    array("Nura aisyah", "222222222", "Teknik Informatika", "Nura222@email.com", "apaya", "Perempuan", "2001-04-04", " "),
    array("Derby", "333455", "Teknik Informatika", "Derby455@email.com", "DerbySobs", "Laki-laki", "2001-05-05", "Kemiling"),
);

foreach ($data_mahasiswa as $mahasiswa) {
    $nama = $mahasiswa[0];
    $nim = $mahasiswa[1];
    $prodi = $mahasiswa[2];
    $email = $mahasiswa[3];
    $password = $mahasiswa[4];
    $jeniskelamin = $mahasiswa[5];
    $tanggallahir = $mahasiswa[6];
    $alamat = $mahasiswa[7];

    $insert_query = "INSERT INTO data_mahassiswa2 (nama, nim, prodi, email, password, jeniskelamin, tanggallahir, alamat)
                     VALUES ('$nama', '$nim', '$prodi', '$email', '$password', '$jeniskelamin', '$tanggallahir', '$alamat')";
    
    mysqli_query($koneksi, $insert_query);
}
$data_mahassiswa2 = mysqli_query($koneksi, "SELECT * FROM data_mahassiswa2 ORDER BY nama ASC");
$no = 1;
?>
