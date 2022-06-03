<?php 

include "config.php";
session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: login.php");
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4> Data Mahasiswa MBKM Program Bangkit by Google, Goto, Traveloka</h2>
            </div>
            <div class="card-body">
                <hr/>
                <form action="bangkit.php" method="post">
                    <input id="filter" type="text" name='search' placeholder="Search">
                    <input type="submit" name="submit" class="btn btn-primary">   
                </form>

                <?php 
                    if (isset($_POST['search'])) {
                        $filter_key ="%".$_POST['search']."%";
                    } else {
                        $filter_key="% %";
                    }
                    $sql = "select mahasiswa.nim, mahasiswa.nama_mhs, mahasiswa.semester, mahasiswa.tahun_daftar, mahasiswa.status, program_KM.nama_program 
                    from mahasiswa inner join join_program on mahasiswa.id_mhs=join_program.id_mhs inner
                    join program_KM on join_program.id_program=program_KM.id_program WHERE join_program.id_program='1'";
                    // $sql = "select * FROM (select mahasiswa.nim, mahasiswa.nama_mhs, mahasiswa.semester, mahasiswa.tahun_daftar, nama_program 
                    // from mahasiswa inner join join_program on mahasiswa.id_mhs=join_program.id_mhs inner
                    // join program_KM on join_program.id_program=program_KM.id_program WHERE nama_program='Magang') where nim like '$filter_key' or 
                    // nama_mhs like '$filter_key' or semester like '$filter_key' or tahun_daftar like '$filter_key'";
                    $query = mysqli_query($conn, $sql);
                ?>
                <table class="table table-bordered" width="60%">
			    <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Semester</th>
                    <th>Periode</th>
                    <th>Status</th>
			    </tr>
                <?php
                $nomor = 1;
                while ($row = mysqli_fetch_array($query)) {

                echo "<tr>";
                    
                echo "<td>".$nomor."</td>";
                echo"<td>".$row['nim']."</td>";
                echo "<td>".$row['nama_mhs']."</td>";
                echo"<td>".$row['semester']."</td>";
                echo"<td>".$row['tahun_daftar']."</td>";
                echo"<td>".$row['status']."</td>";
                echo"</tr>";
                $nomor++;
                }
                ?>
                </table>
            </div>
        </div>
    </div>            
</body>
</html>
