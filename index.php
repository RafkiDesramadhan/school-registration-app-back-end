<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendafataran Siswa Baru</title>
</head>
<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Coding</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendatar</a></li>
        </ul>
    </nav>

    <?php 
        if(isset($_GET['status'])){
            ?>
            <p>
                <?php 
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran Siswa Baru Berhasil!";
                    } else {
                        echo "Pendaftaran Siswa Baru Gagal!";
                    }
                ?>
            </p>
            <?php
        }
    ?>
</body>
</html>