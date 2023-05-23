<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        h1 {
            color: #333;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .img-thumbnail {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border: none;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .acaKotak {
            border: 2px solid grey;
            width: 450px;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand text-center" href="home">Beranda</a>
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
        <h1>Profil</h1>

        <!-- Gambar (opsional) -->
        <img src="/images/aca.jpeg" alt="Gambar Profil" class="img-thumbnail">

        <!-- Nama Lengkap -->
        <p>Nama Lengkap: <?php echo $namaLengkap; ?></p>

        <!-- NIM -->
        <p>NIM: <?php echo $nim; ?></p>

        <!-- Asal Prodi -->
        <p>Asal Prodi: <?php echo $prodi; ?></p>

        <!-- Hobi -->
        <p>Hobi: <?php echo $hobi; ?></p>

        <!-- Skill -->
        <p>Skill: <?php echo $skill; ?></p>

        <!-- Informasi Lainnya (opsional) -->
        <p>Informasi Lainnya: <?php echo $informasiLainnya; ?></p>
    </div>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>