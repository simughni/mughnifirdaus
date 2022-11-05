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
<div class="container-fluid bg-primary text-center text-white p-5 bg-info">
        <h1>Contact Me</h1>
        <h3>Contact me for collaboration and speaking engagement opportunities!</h3>
   </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-9">
                <form name="contact-form" action="mail.php" method="post">
                    <!-- nama dan email-->
                    <div class="row">
                        <!-- nama-->
                        <div class="col-sm-6">
                            <div class="form-floating mt-3 mb-3">
                                <input
                                    class="form-control"
                                    type="text"
                                    id="nama"
                                    name="nama"
                                    placeholder="Masukkan Nama"
                                />
                                <label for="nama">Nama</label>
                            </div>
                        </div>
                        <!-- email-->
                        <div class="col-sm-6">
                            <div class="form-floating mt-3 mb-3">
                                <input
                                    class="form-control"
                                    type="text"
                                    id="email"
                                    name="email"
                                    placeholder="Masukkan Email"
                                />
                                <label for="Email">Email</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-floating mt-3 mb-3">
                                <input
                                    class="form-control"
                                    type="text"
                                    id="subject"
                                    name="subject"
                                    placeholder="Masukkan Judul Pesan"
                                />
                                <label for="subject">Judul Pesan</label>
                            </div>
                            <div class="form-floating mt-3 mb-3">
                                <textarea
                                    class="form-control"
                                    rows="5"
                                    id="pesan"
                                    name="pesan"
                                    placeholder="Masukkan pesan"
                                    style="height: 100px;"
                                    ></textarea>
                                <label for="pesan">Pesan</label>
                            </div>
                            <div class="form-floating mt-3 mb-3">
                            <input type="submit" class="btn btn-success" value="Kirim">
                            </div>
                        </div>    
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</html> 
<div class="col-sm-12 p-4 bg-dark text-white text-center">
  <h5>Muhammad Mughni Firdaus</h5>
</div>
</body>
</html>