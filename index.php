<?php
$koneksi = mysqli_connect("localhost","root","","tugas_akhir");

function selecDatabase($query){
  global $koneksi;

  $table = mysqli_query($koneksi, $query);
  $temp = [];
  while( $data = mysqli_fetch_assoc($table) ){
    $temp[] = $data;
  }
  return $temp;
}
 $data = selecDatabase("SELECT * FROM mahasiswa");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curiculum Vitae Julfan Maulana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
          
  </head>
  <body class="bg-info">
    <div class="container mt-5 mb-5">
        <!--kolom 1-->
        <div class="card text-center shadow mb-5">
          <?php foreach($data as $mahasiswa):?>
            <div class="card-body px-4 py-4">
                <img src="sanaxs.jpg" class="rounded-circle w-50 
                border  border-5"/>
              <h1 class="mb-0"><?=$mahasiswa["nama"]?></h1>
              <span class="fw-light d-block mb-4">Universitas Institut Sapta Mandiri</span>
              <span class="fw-light d-block mb-1">PRODI Teknologi Informasi</span>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer bg-white fs-3">
                <a href="https://www.instagram.com/j_maulana7?igsh=MW94bnhqa25mYzd1cA==" class="text-secondary"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/share/7bWEYi9xPiPKEAm2/?mibextid=qi2Omg" class="text-secondary"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.tiktok.com/@sanaxs?_t=8nyq4GBDjvt&_r=1" class="text-secondary"><i class="fa-brands fa-tiktok"></i></a>
                <a href="https://www.youtube.com/@sanaxs371" class="text-secondary"><i class="fa-brands fa-youtube"></i></a>
            </div>
           
        </div>

        <!--kolom 2-->
        <div class="card shadow mb-5">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <div class="row">
                  <div class="col-4">Email</div>
                  <div class="col-8 text-end text-muted"><?=$mahasiswa["email"]?></div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                 <div class="col-4">GitHub</div>
                 <div class="col-8 text-end text-muted"><?=$mahasiswa["github"]?></div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                 <div class="col-4">Phone</div>
                 <div class="col-8 text-end text-muted"><?=$mahasiswa["phone"]?></div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                 <div class="col-4">Alamat</div>
                <div class="col-8 text-end text-muted"><?=$mahasiswa["alamat"]?></div>
              </li>
              <li class="list-group-item">
                <div class="row">
                 <div class="col-4">Kode Pos</div>
                 <div class="col-8 text-end text-muted"><?=$mahasiswa["kode_pos"]?></div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                 <div class="col-4">Hobi</div>
                 <div class="col-8 text-end text-muted"><?=$mahasiswa["hobi"]?></div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                 <div class="col-4">Organisasi</div>
                 <div class="col-8 text-end text-muted"><?=$mahasiswa["organisasi"]?></div>
                </div>
              </li>
            </ul>
          </div>
          <?php endforeach?>

          <!--Kolom 3-->
          <div class="card shadow mb-5">
            <div class="card-header bg-light fw-bold">Programming Language</div>
            <div class="card-body">
              <div class="row row-cols-5 fs-1 text-secondary text-center">
              <div class="col"><i class="devicon-html5-plain"></i></div>
              <div class="col"><i  class="devicon-css3-plain"></i></div>
              <div class="col"><i class="devicon-php-plain"></i></div>
              <div class="col"><i class="devicon-javascript-plain"></i></div>
              <div class="col"><i class="devicon-bootstrap-plain"></i></div>
              </div>
            </div>
          </div>

          <!--Kolom 4-->
          <div class="card">
            <div class="card-header bg-light fw-bold">Skill</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <p class="mb-0">Problem Solving</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
                </div>
              </li>
              <li class="list-group-item">
                <p class="mb-0">Work On Team</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 95%"></div>
                </div>
              </li>
            </ul>
          </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
