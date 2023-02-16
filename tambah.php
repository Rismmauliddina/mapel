<!DOCTYPE html>
<html lang="en">
<head>  
<title>From mapel</title>
</head>
<body>
<center>
    <header>
    <h1>From Tambah Siswa</h1>
</header>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_guru">Nama  : </label>
                    <input type="text" name="nama_guru" />
</p>
                <p>
                    <label for="alamat">Alamat : </label>
                    <textarea name="alamat" row="5"></textarea>  
</p>
                <p>
                    <label for="jk">Jenis Kelamin : </label>
                    <label><input type="radio" name="jk" value="Laki-laki"/> Laki - laki </label>
                    <label><input type="radio" name="jk" value="Perempuan"/> Perempuan </label>
</p>
<p>
                    <label for="nama_mapel">Nama Mapel : </label>
                    <input type="text" name="nama_mapel" />
</p>
<p>
                    <label for="ruangan">Ruangan : </label>
                    <input type="text" name="ruangan" />
</p>

                <p>
                    <input type="submit" value="Tambah" name="tambah" />
</p>
</center>
</fieldset>
<form>
</body>
</html>