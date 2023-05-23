<!DOCTYPE html>
<html>
<head>
    <title>Halaman Beranda</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
  
    <style>
        .container {
            background-color: #fff; /* Warna latar belakang container */
            border-radius: 10px;
            /* padding: 20px; */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="home">Beranda</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profile">Profil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">   
  <h1>Selamat datang di halaman beranda!</h1> 
  <br></br>

  <div class="container mt-4">
        <div class="jumbotron">
            <p class="lead">Nama: <?= $nama ?></p>
            <p class="lead">NIM: <?= $nim ?></p>
        </div>
    </div>
  </div>
</div>
</div

    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>