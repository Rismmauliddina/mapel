<?php
include("koneksi.php");
if(!isset($_GET['id_guru'])){
    header("Location:lihat_data.php?");
}
$id=$_GET['id_guru'];
$sql= "SELECT * FROM tb_guru INNER JOIN tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel WHERE tb_guru.id_guru='$id'";
$query = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h1>Form Edit</h1>
    <a href="lihat_data.php"><input type="button" value="Kembali"></a>
    <form action="proses_edit.php" method="POST">
                <input type="hidden" name="id_guru" value="<?php echo $row['id_guru']?>" />
                <p>
        <label for="nama_guru"> Nama : </label>
        <input type="text" name="nama_guru" value="<?php echo $row['nama_guru']?>" />
    </p>
    <p>
        <label for="alamat"> Alamat : </label>
        <input type="text" name="alamat" value="<?php echo $row['alamat']?>" />
    </p>
    <p>
        <label for="jk"> Jenis_Kelamin : </label>
        <input type="radio" name="jk" value="Laki-laki" value="<?php echo $row['jk']?>" /> Laki-laki
        <input type="radio" name="jk" value="Perempuan" value="<?php echo $row['jk']?>" /> Perempuan
    </p>
    <p>
        <label for="nama_mapel"> Nama_Mapel : </label>
        <input type="text" name="nama_mapel" value="<?php echo $row['nama_mapel']?>"/>
    </p>
    <p>
        <label for="ruangan"> Ruangan : </label>
        <input type="number" name="ruangan" value="<?php echo $row['ruangan']?>"/>
    </p>
<p>
<input type="submit" value="Edit" name="edit" /> 
</p>
</form>
</body>
</html>