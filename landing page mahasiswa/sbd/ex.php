<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_book";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Tidak bisa terkoneksi ke database");
}
// Variable data
$title        = "";
$author       = "";
$release_date = "";

// Variable alert
$sukses = "";
$error  = "";

// mendapatkan isi dari op
if (isset($_GET['op'])) {
    $op   = $_GET['op'];
} else {
    $op   = "";
}
if ($op == 'delete') {
    $id_book      = $_GET['id_book'];
    $sql1         = "DELETE FROM book_data WHERE id_book = '$id_book'";
    $q1           = mysqli_query($con, $sql1);

    if ($q1) {
        $sukses = "Delete Success!";
    } else {
        $error  = "Delete Failed.";
    }
}

if ($op == 'edit') {
    $id_book      = $_GET['id_book'];
    $sql1         = "SELECT * FROM book_data WHERE id_book = '$id_book'";
    $q1           = mysqli_query($con, $sql1);
    $r1           = mysqli_fetch_array($q1);
    $title        = $r1['title'];
    $author       = $r1['author'];
    $release_date = $r1['release_date'];

    // kalo isinya kosong kasih error
    if ($title == '') {
        $error = "No Data.";
    }
}
if (isset($_POST['save'])) {
    $title        = $_POST['title'];
    $author       = $_POST['author'];
    $release_date = $_POST['release_date'];

    if ($title && $author && $release_date) {

        if ($op == 'edit') {    //UPDATE
            $sql1       = "UPDATE book_data SET title = '$title', author = '$author', release_date = '$release_date' WHERE id_book = '$id_book'";
            $q1         = mysqli_query($con, $sql1);
            if ($q1) {
                $sukses = "Edit Success!";
            } else {
                $error  = "Edit Failed.";
            }
        } else {    //INSERT
            $sql1 = "INSERT INTO book_data (title,author,release_date) VALUES ('$title','$author','$release_date')";
            $q1   = mysqli_query($con, $sql1);
            //ngecek apakah berhasil memasukan data
            if ($q1) {
                $sukses = "Book Saved!";
            } else {
                $error  = "Saved Fail.";
            }
        }
    } else {
        $error = "Please Input Book Data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Book Data</title>
    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukan data -->
        <div class="card">
            <div class="card-header">
                Create/Edit
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");  //5 = setiap 5 detik, redirect ke index.php
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=index.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $title ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="author" class="col-sm-2 col-form-label">Author</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="author" id="author" value="<?php echo $author ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="release_date" class="col-sm-2 col-form-label">Release Date</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="release_date" id="release_date" value="<?php echo $release_date ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="save" value="Save Book!" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
        <!-- untuk mengeluarkan data -->
        <div class="card">
                <div class="card-header text-white bg-secondary">
                    Book Data
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Release Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        <tbody>
                            <?php
                            $sql2 = "SELECT * FROM book_data ORDER BY id_book asc";
                            $q2   = mysqli_query($con, $sql2);
                            $urut = 1;
                            while ($r2 = mysqli_fetch_array($q2)) {
                                $id_book      = $r2['id_book'];
                                $title        = $r2['title'];
                                $author       = $r2['author'];
                                $release_date = $r2['release_date'];

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $urut++ ?></th>
                                    <th scope="row"><?php echo $title ?></th>
                                    <th scope="row"><?php echo $author ?></th>
                                    <th scope="row"><?php echo $release_date ?></th>
                                    <td scope="row">
                                        <a href="index.php?op=edit&id_book=<?php echo $id_book ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                        <a href="index.php?op=delete&id_book=<?php echo $id_book ?>" onclick="return confirm('Want to delete this?')"><button type="button" class="btn btn-danger">Delete</button></a>   
                                    </td>
                                </tr>
                            <?php

                            }
                            ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
</body>

</html>

<!-- 
    Nama: Mohamad Asyqari Anugrah
    NIM: 2102204
    Kelas: ILKOM C1
 -->