<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>

  </style>
  </style>
</head>
<body>

<div class="p-5 bg-dark text-white text-center">
  <h1>Muhammad Mughni Firdaus</h1>
  <p>Programmer | Technical Building</p> 
</div>

<nav class="navbar navbar-expand-sm bg-success navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="blog.php">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pengalamankerja.php">Experience & Education</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="portofolio.php">Potofolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
    </ul>
  </div>
</nav>
<?php
include "koneksi.php";
$querySQL = "SELECT * FROM pendidikan";
$execQuerySQL = mysqli_query($conn, $querySQL);
if (mysqli_num_rows($execQuerySQL) > 0) {
    while ($row = mysqli_fetch_assoc ($execQuerySQL)) {
?>
      <div class="fakeimg">
        <img style="width:100%; height:100%" src="images/<?= $row['img']?>"/>
      </div>
<?php
    }
}
?>
    </div>
  </div>
</div>

<div class="col-sm-12 p-4 bg-dark text-white text-center">
  <h5>Muhammad Mughni Firdaus</h5>
</div>
</body>
</html>