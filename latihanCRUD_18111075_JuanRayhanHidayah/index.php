<?php
include 'config/data_register.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script language="Javascript" src="modul/bootstrap-4.3.1-dist/js/bootstrap.min.js"> </script>
    <script src="modul/JQuery/jquery.min.js"></script>

    <!-- CSS dan JS DataTable -->
    <script src="modul/DataTable/datatables.min.js"></script>
    <script src="modul/DataTable/DataTables-1.10.23/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center" style="margin: 15px;">Latihan CRUD Pertemuan 10</h1>
        <a href="register.php" class="btn btn-success">Register Data</a>
        <table id="dataregister" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $q->fetch()) :
                    $id = $row['id'];
                    $namadepan = $row['nama_depan'];
                    $namabelakang = $row['nama_belakang'];
                    $namalengkap = $namadepan . " " . $namabelakang;
                    $email = $row['email'];
                    $username = $row['username'];
                ?>
                    <tr>
                        <td><?php echo $namalengkap; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $username; ?></td>
                        <!-- Edit Data -->
                        <td>
                            <form action="edit.php" method="POST">
                                <input type="hidden" name="id_reg" value=" <?= $id; ?> ">
                                <input type="hidden" name="namadepan" value=" <?= $namadepan; ?> ">
                                <input type="hidden" name="namabelakang" value=" <?= $namabelakang; ?> ">
                                <input type="hidden" name="email" value=" <?= $email; ?> ">
                                <input type="hidden" name="username" value=" <?= $username; ?> ">
                                <button type="submit" class="btn btn-primary" style="width:100%;">Edit</button>
                            </form>

                            <form action="config/hapus.php" method="POST">
                                <input type="hidden" name="id_reg" value=" <?= $id ?>">
                                <button type="submit" class="btn btn-danger" style="margin-top: 10px; width:100%;">Hapus</button>
                        </td>
                        </form>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    $(document).ready(function() {
        $('#dataregister').DataTable({
            "aLengthMenu": [
                [5, 10, 25, -1],
                [5, 10, 25, "All"]
            ],
            "iDisplayLength": 5
        });
    });
</script>

</html>