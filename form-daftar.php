<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa</title>
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Siswa</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="Nama Lengkap">
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <label><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama : </label>
                <select name="agama">
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="budha">Budha</option>
                    <option value="atheis">Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" placeholder="Nama Sekolah">
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar">
            </p>
        </fieldset>
    </form>
</body>
</html>