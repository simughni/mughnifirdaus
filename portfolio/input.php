<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD - View Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
    $tombol = "";
    if (isset($_POST['firstname'])) {
        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];

        include "koneksi.php";
        $query = "INSERT INTO biodata (firstname,lastname,email)
                VALUES ('$firstName','$lastName','$email')";
        //eksekusi query
        $execQuery = mysqli_query($conn,$query);
        if ($execQuery) {
            $tombol = "disabled";
            echo "
            <div class=\"container mt-3\">
                <div class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    <strong>Data Berhasil!</strong> Data berhasil diinput ke dalan Database.
                </div>
            </div>";
        }
        else {
            echo "
            <div class=\"container mt-3\">
                <div class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    <strong>Data Tidak Berhasil!</strong>Data tidak berhasil diinput ke dalam Database.
                </div>
            </div>";
        }
        mysqli_close($conn);
    }

?>

    <div class="container mt-3">
        <h2>Input Data <a href="view.php" class="btn btn-danger">Kembali</a></h2>
        <form action="input.php" method="post">
            <div class="form-floating mb-3 mt-3">
                <input
                type="text"
                class="form-control"
                id="firstname"
                name="firstname"
                placeholder="Input Nama Depan"
                <?= $tombol ?>
            >
            <label for="firstname">Nama Depan</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input
                type="text"
                class="form-control"
                id="lastname"
                name="lastname"
                placeholder="Input Nama Belakang"
                <?= $tombol ?>
            >
            <label for="lasttname">Nama Belakang</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input
                type="text"
                class="form-control"
                id="email"
                name="email"
                placeholder="Input Email"
                <?= $tombol ?>
            >
            <label for="email">Email</label>
            </div>
            <input type="submit" class="btn btn-success" value="Simpan">
        </form>
    </div>
</body>
</html>