<?php
	session_start();

	if(!isset($_SESSION["login"])){
		header("Location: ../index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi | Al-Awaliyah</title>
    <link rel="icon" href="../img/favicon.png" type="img/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav> <!--Navbar-->
        <div class="topnav bg-success bg-opacity-75"> 
            <div class="row w-100">
                <div class="col col-2">
                    <div class="burger">
                        <a class="btn btn-link" data-bs-toggle="offcanvas" href="#offcanvas" role="button">
                            <i class="bi bi-list text-white fs-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <h1 class="text-light m-2">Al-Awaliyah</h1>
                </div>
                <div class="col col-2 d-flex justify-content-end align-items-center">
                    <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-light me-3 " href="../action/logout.php">Logout</a>
                </div>
            </div>
        </div>         
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title fw-bold" id="offcanvasExampleLabel">Menu</h5>
              <button type="button" class="btn-close m-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <a href="dashboard.php">
                    <div class="navitem p-2">
                        Absensi
                    </div>
                </a>
                <a href="#">
                    <div class="navitem p-2">
                        Rekap Kehadiran
                    </div>
                </a>
            </div>
        </div>
    </nav>
    <div class="container p-3">
      <div class="input-group mb-3">
        <label class="input-group-text" for="inputGroupSelect01">Kelas</label>
        <select class="form-select" id="inputGroupSelect01" name="kelas">
        <option value="all">Semua</option>
          <option value="1A" selected>Kelas 1A</option>
          <option value="1B">Kelas 1B</option>
          <option value="2A">Kelas 2A</option>
          <option value="2B">Kelas 2B</option>
          <option value="3A">Kelas 3A</option>
          <option value="3B">Kelas 3B</option>
          <option value="4">Kelas 4</option>
        </select>
        <label class="input-group-text ms-3" for="inputGroupSelect01">Mata Pelajaran</label>
        <select id="inputGroupSelect02" class="form-select" id="inputGroupSelect01" name="kelas">
          <option value="semua" <?= isset($_GET['mata_pelajaran']) == true ? ($_GET['mata_pelajaran'] == 'semua' ? 'selected' : '') : '' ?>>Semua</option>
          <option value="doa" <?= isset($_GET['mata_pelajaran']) == true ? ($_GET['mata_pelajaran'] == 'doa' ? 'selected' : '') : '' ?>>Do'a</option>
          <option value="hadis" <?= isset($_GET['mata_pelajaran']) == true ? ($_GET['mata_pelajaran'] == 'hadis' ? 'selected' : '') : '' ?>>Hadis</option>
          <option value="juzama" <?= isset($_GET['mata_pelajaran']) == true ? ($_GET['mata_pelajaran'] == 'juzama' ? 'selected' : '') : '' ?>>Juz Ama</option>
          <option value="arab" <?= isset($_GET['mata_pelajaran']) == true ? ($_GET['mata_pelajaran'] == 'arab' ? 'selected' : '') : '' ?>>B. Arab</option>
          <option value="persolatan" <?= isset($_GET['mata_pelajaran']) == true ? ($_GET['mata_pelajaran'] == 'persolatan' ? 'selected' : '') : '' ?>>Persolatan</option>
          <option value="tauhid" <?= isset($_GET['mata_pelajaran']) == true ? ($_GET['mata_pelajaran'] == 'tauhid' ? 'selected' : '') : '' ?>>Tauhid</option>
        </select>
        <label class="input-group-text ms-3" for="inputGroupSelect01">Bulan</label>
        <select id="inputGroupSelect03" class="form-select" id="inputGroupSelect01" name="kelas">
          <option value="semua" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == 'semua' ? 'selected' : '') : '' ?>>Semua</option>
          <option value="1" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '1' ? 'selected' : '') : '' ?>>Januari</option>
          <option value="2" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '2' ? 'selected' : '') : '' ?>>Februari</option>
          <option value="3" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '3' ? 'selected' : '') : '' ?>>Maret</option>
          <option value="4" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '4' ? 'selected' : '') : '' ?>>April</option>
          <option value="5" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '5' ? 'selected' : '') : '' ?>>Mei</option>
          <option value="6" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '6' ? 'selected' : '') : '' ?>>Juni</option>
          <option value="7" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '7' ? 'selected' : '') : '' ?>>Juli</option>
          <option value="8" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '8' ? 'selected' : '') : '' ?>>Agustus</option>
          <option value="9" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '9' ? 'selected' : '') : '' ?>v>September</option>
          <option value="10" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '10' ? 'selected' : '') : '' ?>>Oktober</option>
          <option value="11" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '11' ? 'selected' : '') : '' ?>>November</option>
          <option value="12" <?= isset($_GET['bulan']) == true ? ($_GET['bulan'] == '12' ? 'selected' : '') : '' ?>>Desember</option>
        </select>
      </div>
      <div class="row">
        <div class="col">
          <a href="../action/sheet.php?kelas=1">
              <button class="btn btn-primary">Download Rekap Kehadiran</button>
          </a>
        </div>
        <div class="col col-4 ms-auto">
          <div class="input-group mb-3">
            <input id="search" type="text" class="form-control" placeholder="Cari Nama" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </div>
      </div>
      <table class="table table-striped m-0 align-items-center">
        <thead class="text-center">
        <tr>
            <th class="col-1" scope="col">#</th>
            <th class="col-2" scope="col">NIS</th>
            <th class="col-4" scope="col">Nama</th>
            <th class="col-1" scope="col">Hadir</th>
            <th class="col-1" scope="col">Sakit</th>
            <th class="col-1" scope="col">Izin</th>
            <th class="col-1" scope="col">Alpha</th>
          </tr>
        </thead>
        </thead>
        <tbody id="data-table-body">
            <?php
            include "../action/koneksi.php";

            $query = "";

            if (isset($_GET['mata_pelajaran']) && $_GET['mata_pelajaran'] != 'semua' && $_GET['mata_pelajaran'] != '' && isset($_GET['bulan']) && $_GET['bulan'] != 'semua' && $_GET['bulan'] != '') {
                $query = "SELECT 
                siswa.nis, 
                siswa.nama, 
                kelas.nama_kelas, 
                COALESCE(SUM(CASE WHEN presensi.status_presensi = 'H' THEN 1 ELSE 0 END), 0) as hadir,
                COALESCE(SUM(CASE WHEN presensi.status_presensi = 'S' THEN 1 ELSE 0 END), 0) as sakit,
                COALESCE(SUM(CASE WHEN presensi.status_presensi = 'I' THEN 1 ELSE 0 END), 0) as izin,
                COALESCE(SUM(CASE WHEN presensi.status_presensi = 'A' THEN 1 ELSE 0 END), 0) as alpha
            FROM 
                siswa
            LEFT JOIN 
                presensi ON siswa.nis = presensi.nis AND MONTH(presensi.tanggal) = '". $_GET['bulan'] ."' AND presensi.id_matapelajaran = '". $_GET['mata_pelajaran'] ."'
            LEFT JOIN 
                kelas ON siswa.id_kelas = kelas.id_kelas
            WHERE 
                kelas.id_kelas = '1'
            GROUP BY 
                siswa.nis;
            ";
            }else if($_GET['mata_pelajaran'] == 'semua' || $_GET['mata_pelajaran'] == '' || $_GET['bulan'] == 'semua' || $_GET['bulan'] == ''){
              $query = "SELECT siswa.nis, siswa.nama, kelas.nama_kelas,
              SUM(CASE WHEN presensi.status_presensi = 'H' THEN 1 ELSE 0 END) as hadir,
              SUM(CASE WHEN presensi.status_presensi = 'S' THEN 1 ELSE 0 END) as sakit,
              SUM(CASE WHEN presensi.status_presensi = 'I' THEN 1 ELSE 0 END) as izin,
              SUM(CASE WHEN presensi.status_presensi = 'A' THEN 1 ELSE 0 END) as alpha
              FROM siswa
              LEFT JOIN presensi ON siswa.nis = presensi.nis
              LEFT JOIN kelas ON siswa.id_kelas = kelas.id_kelas
              LEFT JOIN matapelajaran ON presensi.id_matapelajaran = matapelajaran.id_matapelajaran WHERE kelas.id_kelas = '1'  GROUP BY siswa.nis";
            }

            $data = mysqli_query($koneksi, $query);

            var_dump($query);
            $no = 1;
            while($d = mysqli_fetch_array($data)){
                echo "<tr>";
                echo "<th class='text-center' scope='row'>" . $no++ . "</th>";
                echo "<td class='text-center'>" . $d["nis"] . "</td>";
                echo "<td class='text-start'>" . $d["nama"] . "</td>";
                
                $sakitColor = ($d['sakit'] > 3) ? 'text-danger fw-bold' : '';
                $izinColor = ($d['izin'] > 3) ? 'text-danger fw-bold' : '';
                $alphaColor = ($d['alpha'] > 3) ? 'text-danger fw-bold' : '';

                echo "<td class='text-center'>" . $d["hadir"] . "</td>";
                echo "<td class='text-center $sakitColor'>" . $d["sakit"] . "</td>";
                echo "<td class='text-center $izinColor'>" . $d["izin"] . "</td>";
                echo "<td class='text-center $alphaColor'>" . $d["alpha"] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
      </table>
    </div>
    <footer class="text-lg-start mt-3">
        <div class="d-flex justify-content-center align-items-center text-white p-3" style="background-color: rgb(83,165,127);">
        © 2020 Copyright:
        <a class="text-white" href="https://www.instagram.com/sisteminformasi_02?igsh=MWF0bmJwczFmZDcybg==" target="_BLANK">SINFC-2022-02</a>
        Universitas Kuningan
        </div>
    </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      // Event listener for select change
      $('#inputGroupSelect01').change(function() {
        var selectedKelas = $(this).val();

        switch(selectedKelas) {
          case 'all':
            window.location.href = 'rekapKehadiran.php';
            break;
          case '1A':
            window.location.href = 'rekap1A.php';
            break;
          case '1B':
            window.location.href = 'rekap1B.php';
            break;
          case '2A':
            window.location.href = 'rekap2A.php';
            break;
          case '2B':
            window.location.href = 'rekap2B.php';
            break;
          case '3A':
            window.location.href = 'rekap3A.php';
            break;
          case '3B':
            window.location.href = 'rekap3B.php';
            break;
          case '4':
            window.location.href = 'rekap4.php';
            break;
        }
      });
    });

    $(document).ready(function() {
      // Event listener for select change
      $('#inputGroupSelect02, #inputGroupSelect03').change(function() {
        var selectedKelas = $('#inputGroupSelect01').val();
                var selectedMataPelajaran = $('#inputGroupSelect02').val();
                var selectedBulan = $('#inputGroupSelect03').val();

                window.location.href = 'rekap1A.php?' + 'mata_pelajaran=' + selectedMataPelajaran + '&bulan=' + selectedBulan;
            });

      $("#search").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          var tabel = "kelas1a"; // Ganti dengan nama tabel yang diinginkan
          $.ajax({
              url: "../action/search.php",
              type: "POST",
              data: {search:value, tabel:tabel}, // Mengirimkan data tabel yang akan dicari
              success: function(data) {
                  $("#data-table-body").html(data);
              }
          });
      });
    });

  </script>
</body>
</html>