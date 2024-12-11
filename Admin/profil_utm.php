  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Layanan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="media.php">Home</a></li>
          <li class="breadcrumb-item active">Profil UTM</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Profil Universitas Mataram</h5>

                  <div class="col-12">

                 
                    </div>

<a href="?page=tambah_profil_utm.php" class="btn btn-primary"> Tambah </a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>Uraian</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

// $query = mysqli_query($koneksi, $sql);
// $data = mysqli_fetch_array ($query);
// $row = mysqli_num_rows($query);

// include "../koneksi.php";
                  $query = mysqli_query($koneksi,"SELECT *FROM profil_utm");
                  $tampung = mysqli_fetch_all($query, MYSQLI_ASSOC);
                  $no = 0;
                  foreach($tampung as $tampil):
                    $no++;
                    // print_r($tampung);
                  ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $tampil['nama']; ?></td>
                    <td><?php echo $tampil['judul']; ?></td>
                    <td><?php echo $tampil['uraian']; ?></td>
                    <td><a href="?page=profil_utm&id=<?php echo $tampil['id']; ?>"><i class="bi bi-pencil"></i></a>&nbsp;<a href="http://"><i class="bi bi-trash"></i>&nbsp;</a></td>
                  </tr>
                 <?php
                 endforeach;
                // echo $_GET['id'];
                 ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
