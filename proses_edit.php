<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id=$_POST['id_guru'];
    $nama_guru=$_POST['nama_guru'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $nama_mapel=$_POST['nama_mapel'];
    $ruangan=$_POST['ruangan'];

    $sql = "UPDATE tb_guru SET nama_guru='$nama_guru', alamat='$alamat', jk='$jk' WHERE id_guru='$id'";
    $query= mysqli_query($koneksi,$sql);

    $sql = "UPDATE tb_mapel SET nama_mapel='$nama_mapel', ruangan='$ruangan' WHERE kode_mapel='$id'";
    $query= mysqli_query($koneksi,$sql);
    
    if($query){
        header('Location:lihat_data.php');
    }else{
        die ("gagal mengedit");
    }}
?>