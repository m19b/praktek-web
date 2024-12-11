  <main id="main" class="main">


      <div class="cal-lg-12">
          <div class="row">
              <!-- Sales Card -->
              <div class="col-xxl-10">
                  <div class="pagetitle">
                      <h1>Dosen</h1>
                      <nav>
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="media.php">Home</a></li>
                              <li class="breadcrumb-item active">Dosen</li>
                          </ol>
                      </nav>
                  </div><!-- End Page Title -->
              </div><!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-2">
                  <div class="d-grid gap-2 mt-3">
                      <a href="" class="btn btn-primary" type="button">Tambah</a>
                  </div>

              </div><!-- End Revenue Card -->


          </div>
      </div>





      <section class="section">
          <div class="row">
              <div class="col-lg-12">

                  <div class="card">
                      <div class="card-body">


                          <h5 class="card-title">Dosen Universitas Mataram</h5>

                          <div class="col-12">

                          </div>


                          <!-- Table with stripped rows -->
                          <table class="table datatable">
                              <thead>
                                  <tr>
                                      <th>No.</th>
                                      <th>Foto</th>
                                      <th>NIDN</th>
                                      <th>Nama</th>
                                      <th>Jabatan</th>
                                      <th>Fakultas</th>
                                      <th>Aksi</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                      $tampil = "select *from dosen";
                      $query = mysqli_query($koneksi, $tampil);
                      $no=1;
        

                     while($data = mysqli_fetch_array ($query,MYSQLI_ASSOC)){
                  
                  ?>

                                  <tr>
                                      <td><?php echo $no; ?></td>
                                      <td><img height="50" width="50" src="assets/img/dosen/<?=$data['foto']?>"
                                              alt="">
                                      </td>
                                      
                                      <td><?=$data['nidn']?></td>
                                      <td><?=$data['nama']?></td>
                                      <td><?=$data['jabatan']?></td>
                                      <td><?=$data['fakultas']?></td>

                                      <td><a href="?page=dossen_edit&id=<?=$data['id']?>"><i
                                                  class="bi bi-pencil"></i></a>&nbsp;<a href="?page=dossen_delete&id=<?=$data['id']?>"><i
                                                  class="bi bi-trash"></i>&nbsp;</a></td>
                                  </tr>
                                  <?php
                  $no++;
                }
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