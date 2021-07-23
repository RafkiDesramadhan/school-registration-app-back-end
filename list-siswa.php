<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
</head>
<body>
    <header>
        <h3>Siswa yang mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] tambah baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT * FROM calon_siswa";
            $query = mysqli_query($link, $sql);

            while($siswa = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $siswa[0]; ?></td>
                    <td><?php echo $siswa[1]; ?></td>
                    <td><?php echo $siswa[2]; ?></td>
                    <td><?php echo $siswa[3]; ?></td>
                    <td><?php echo $siswa[4]; ?></td>
                    <td><?php echo $siswa[5]; ?></td>
                    <td>
                        <a href="form-edit.php?id=<?php echo $siswa[0]; ?>">Edit</a> |
                        <a href="hapus.php?id=<?php echo $siswa[0]; ?>">Hapus</a>
                    </td>
                </tr>                    
                <?php
            }
            ?>
        </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query); ?></p>
</body>
</html>