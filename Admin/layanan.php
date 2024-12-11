  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Layanan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="media.php">Home</a></li>
          <li class="breadcrumb-item active">Layanan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Layanan</h5>

                  <div class="col-12">

                   </div>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Ikon</th>
                    <th>Judul Layanan</th>
                    <th>Deskripsi</th>
                   
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      $tampil = "select *from layanan";
                      $query = mysqli_query($koneksi, $tampil);
                      $no=1;
        

                     while($data = mysqli_fetch_array ($query,MYSQLI_ASSOC)){
                  
                  ?>

                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><i class="bi <?php echo $data['icon']; ?>"></i></td>
                    <td><?php echo $data['judulLayanan']; ?></td>
                    <td><?php echo $data['deskipsi']; ?></td>
              
                    <td><a href="#"><i class="bi bi-pencil"></i></a>&nbsp;<a href="http://"><i class="bi bi-trash"></i>&nbsp;</a></td>
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
