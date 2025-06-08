<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pengajuan Kontrak</title>
  
  <!-- font poppins -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    /* font poppins */
    body {
      font-family: 'Poppins', sans-serif;
      font-weight: 600; /* teks tebal */
    }

    /* sidebar: biru tua custom */
    .sidebar {
      background-color: #264a7a; /* contoh biru tua; ganti sesuai keinginan */
      min-height: 100vh;
    }

    /* tombol sidebar */
    .sidebar .nav-link {
      color: #ffffff;
      font-weight: 300; /* teks tebal */
      padding: 10px 15px;
      transition: background-color 0.2s;
    }
    .sidebar .nav-link:hover {
      background-color: #14293F; /* warna tua saat hover */
      color: #ffffff;
    }
    /* placeholder icon */
    .sidebar .nav-link::before {
      content: '⮞ '; /* ganti dengan icon sesuai kebutuhan */
      margin-right: 5px;
    }

    /* tombol kontrak: warna sidebar, full */
    .btn-sidebar {
      background-color: #264a7a;
      color: #ffffff;
      width: 100%; /* lebar tombol sama dengan grid form */
      font-weight: 600; /* teks tebal */
    }
    .btn-sidebar:hover {
      background-color: #14293F; /* warna tua saat hover */
      color: #ffffff;
    }

    /* info grid: putih, border abu */
    .info-grid {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
    }
    .info-box {
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 10px;
      width: 48%; /* 2 kotak berdampingan */
      text-align: center;
    }

    /* judul form center */
    .text-center {
      text-align: center !important;
    }

    /* form grid: shadow */
    .card.form-shadow {
      box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <!-- sidebar -->
      <nav class="col-md-2 sidebar text-white">
        <div class="py-4 text-center">
          <!-- profil user -->
          <img src="https://via.placeholder.com/60" class="rounded-circle mb-2" alt="User">
          <p class="mb-0">User</p>
          <small>user@email.com</small>
        </div>
        <ul class="nav flex-column mt-4">
          <li class="nav-item">
            <a class="nav-link" href="#">Helperlog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Helperfind</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Helperassist</a>
          </li>
        </ul>
        <div class="mt-4 text-center">
          <button class="btn btn-light font-weight-normal">Log Out</button>
        </div>
      </nav>
      
      <!-- konten -->
      <main class="col-md-10">
        <div class="container py-4">
          <!-- judul halaman -->
          <h4 class="mb-4 font-weight-bold">Pengajuan Kontrak</h4>

          <div class="row">
            <!-- caregiver profile -->
            <div class="col-md-5">
              <div class="card">
                <!-- caregiver foto -->
                <img 
                  src="https://via.placeholder.com/400x300" 
                  class="card-img-top" 
                  alt="Foto Caregiver">
                <div class="card-body">
                  <h5 class="card-title mb-1">Nagisa Natsumi</h5>
                  <p class="card-text font-weight-normal">Perawat Lansia</p>

                  <!-- info grid -->
                  <div class="info-grid">
                    <div class="info-box">
                      <div style="font-size: 24px;">4</div>
                      <div class="font-weight-normal">Tahun Pengalaman</div>
                    </div>
                    <div class="info-box">
                      <div style="font-size: 24px;">4.6</div>
                      <div class="font-weight-normal">Rating</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- form kontrak -->
            <div class="col-md-7">
              <div class="card form-shadow">
                <div class="card-body">
                  <!-- judul form -->
                  <h5 class="card-title text-center mb-4 font-weight-bold">Form Pengajuan Kontrak</h5>

                  <form>
                    <div class="form-group">
                      <label for="namaPengaju" class="font-weight-normal">Nama Pengaju</label>
                      <input type="text" class="form-control" id="namaPengaju" placeholder="Masukkan nama pengaju">
                    </div>                    
                    <div class="form-group">
                      <label for="alamatPengaju" class="font-weight-normal">Alamat Pengaju</label>
                      <input type="text" class="form-control" id="alamatPengaju" placeholder="Masukkan alamat lengkap anda">
                    </div>
                    <div class="form-group">
                      <label for="penempatanKerja" class="font-weight-normal">Penempatan Kerja</label>
                      <select class="form-control" id="penempatanKerja">
                        <option>Surabaya</option>
                        <option>Jakarta</option>
                        <option>Bandung</option>
                      </select>
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="penempatanLuar">
                      <label class="form-check-label font-weight-normal" for="penempatanLuar">
                        Ajukan Penempatan di luar domisili
                      </label>                      
                    </div>
                    <div class="form-group">
                      <label for="rencanaMasaKontrak" class="font-weight-normal">Rencana Masa Kontrak</label>
                      <select class="form-control" id="rencanaMasaKontrak">
                        <option>1 bulan</option>
                        <option>3 bulan</option>
                        <option>6 bulan</option>
                        <option>1 tahun</option>
                      </select>
                    </div>
                    <!-- tombol kontrak -->
                    <button type="submit" class="btn btn-sidebar font-weight-normal">Ajukan Kontrak</button>
                  </form>
                </div>
              </div>
            </div>
          </div> <!-- row -->
        </div> <!-- container -->
      </main>
    </div>
  </div>

  <!-- bootstrap js -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>