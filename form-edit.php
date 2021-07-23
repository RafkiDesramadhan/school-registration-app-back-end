<?php 
    include("config.php");

    if(!isset($_GET['id'])){
        header('Location: list-siswa.php');
    }

    $id = $_GET['id'];
    $sql = "SELECT * FROM calon_siswa WHERE id='$id' ";
    $query = mysqli_query($link, $sql);
    $siswa = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) < 1) {
        die('data tidak ada');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa</title>
</head>
<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $siswa[0]; ?>">
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php  echo $siswa[1];?>">
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat"><?php echo $siswa[2]; ?></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis Kelamin : </label>
                <?php $jk = $siswa[3]; ?>
                <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php echo ($jk == 'Laki-Laki') ? "checked":"" ?>>Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Permpuan" <?php echo ($jk == 'Permpuan') ? "checked":"" ?>>Perempuan</label>
            </p>
            <p>
                <label for="agama">Agama : </label>
                <?php $agama = $siswa[4]; ?>
                <select name="agama">
                    <option value="islam" <?php echo ($agama == 'islam') ? "selected":"" ?>>Islam</option>
                    <option value="kristen" <?php echo ($agama == 'kristen') ? "selected":"" ?>>Kristen</option>
                    <option value="hindu" <?php echo ($agama == 'hindu') ? "selected":"" ?>>Hindu</option>
                    <option value="budha" <?php echo ($agama == 'budha') ? "selected":"" ?>>Budha</option>
                    <option value="atheis" <?php echo ($agama == 'atheis') ? "selected":"" ?>>Atheis</option>
                </select>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal : </label>
                <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" value="<?php echo $siswa[5]; ?>">
            </p>
            <p>
                <input type="submit" value="simpan" name="simpan">
            </p>
        </fieldset>
    </form>
</body>
</html>