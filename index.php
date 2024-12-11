<?php
 include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Web UTM Mataram</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <?php include ("menu.php"); ?>

    <main class="main">

        <!-- Hero Section -->
        <section id="home" class="hero section dark-background">

            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Selamat Datang di Kampus Kami!!!</h2>
                        <p data-aos="fade-up" data-aos-delay="200">Universitas Teknologi Mataram</p>
                    </div>
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- About Section -->
        <section id="about" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Profil Universitas Mataram</h2>
                <!-- <p>Rincian Biaya Kuliah Universitas Teknologi Mataram</p> -->
            </div><!-- End Section Title -->

            <div class="container" data-aos="zoom-in" data-aos-delay="100">

                <div class="row g-4">
                    <?php 
                    $query = mysqli_query($koneksi,"SELECT nama,judul from profil_utm GROUP BY nama ORDER BY urut");
                    while($tampilbk = mysqli_fetch_array($query)){
                  $idbk = $tampilbk['nama'];
                        
                    ?>



                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <!-- featured -->

                            <h4><?=$tampilbk['nama']?><span> </h4>


                            <ul>
                                <?php 
                            $query2 = mysqli_query($koneksi,"SELECT *FROM profil_utm WHERE nama = '$idbk' ORDER BY urut ");
                            while($titem = mysqli_fetch_array($query2)){
                            ?>


                                <div class="member-info text-center">
                                    <p><?=$titem['uraian']?></p>
                                </div>

                                <?php };?>

                            </ul>

                        </div>
                    </div><!-- End Pricing Item -->
                    <?php };?>




                </div>

            </div>

        </section><!-- /Pricing Section -->
        <!-- Stats Section -->
        <section id="stats" class="stats section dark-background">

            <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="2032" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Mahasiswa</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="102" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Dosen</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="10453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Alumni</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Prodi</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan</h2>
                <p>Layanan yang ditawarkan oleh Universitas Teknologi Mataram (UTM)</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <?php
                      $tampil = "select *from layanan";
                      $query = mysqli_query($koneksi, $tampil);
                      $no=1;
                     while($data = mysqli_fetch_array ($query)){
                      
                  ?>


                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi <?php echo $data['icon']; ?>"></i></div>
                            <div>
                                <h4 class="title"><a href="#"
                                        class="stretched-link"><?php echo $data['judulLayanan']; ?></a></h4>
                                <p class="description"><?php echo $data['deskipsi']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->
                    <?php
                  $no++;
                }
                 ?>


                </div>

            </div>

        </section><!-- /Services Section -->


        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Galeri</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT kategori from galeri where saktif = 'Y' GROUP BY kategori");
                                                while($tampil2 = mysqli_fetch_array($query)){
                        ?>
                        <li data-filter=".<?=$tampil2['kategori'] ?>"><?=$tampil2['kategori'] ?></li>
                        <?php }; ?>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <?php
                        $query = mysqli_query($koneksi, "SELECT *FROM galeri WHERE saktif = 'Y' ");                        
                        while($tampil = mysqli_fetch_array($query)){
                        ?>
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?=$tampil['kategori'] ?>">
                            <img src="admin/assets/img/galeri/<?=$tampil['nama_foto']?>" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4><?=$tampil['ket'];?></h4>
                                <p>View Kampus UTM</p>
                                <a href="assets/img/galeri/g2.png" title="Kampus" data-gallery="portfolio-gallery-app"
                                    class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.php" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->
                        <?php }; ?>

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Biaya Kuliah</h2>
                <p>Rincian Biaya Kuliah Universitas Teknologi Mataram</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="zoom-in" data-aos-delay="100">

                <div class="row g-4">
                    <?php 
                    $query = mysqli_query($koneksi,"SELECT
	biayakuliah.id,
	biayakuliah.nominal,
	biayakuliah.satuan,
	biayakuliah.ikon,
	biayakuliah.posisi,
	biayakuliah.urut,
	prodi.nama_prodi,
	fakultas.nama_fakultas 
FROM
	biayakuliah
	INNER JOIN prodi ON biayakuliah.prodi_id = prodi.id_prodi
	INNER JOIN fakultas ON prodi.id_fakultas = fakultas.id_fakultas
     ORDER BY biayakuliah.urut");
                    while($tampilbk = mysqli_fetch_array($query)){
                  $idbk = $tampilbk['id'];
                        
                    ?>



                    <div class="col-lg-4">
                        <div class="pricing-item <?=$tampilbk['posisi']?>">
                            <!-- featured -->
                            <h3><?=$tampilbk['nama_fakultas']?></h3>
                            <h3><?=$tampilbk['nama_prodi']?></h3>
                            <div class=" icon">
                                <i class="bi bi-rocket"></i>
                            </div>

                            <h4><sup>Rp. </sup><?php echo number_format($tampilbk['nominal']) ?><span> /
                                    <?=$tampilbk['satuan'] ?></span></h4>


                            <ul>
                                <?php 
                            $query2 = mysqli_query($koneksi,"SELECT *FROM biayakuliah_item WHERE biayakuliah_id = '$idbk' ORDER BY urut ");
                            while($titem = mysqli_fetch_array($query2)){
                            ?>
                                <li class="<?=$titem['coret'] ?>"><i class="bi <?=$titem['ikon']?>"></i>
                                    <span><?=$titem['uraian']?></span>
                                </li>

                                <?php };?>

                            </ul>

                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->
                    <?php };?>




                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">
                            <div class="faq-item faq-active">
                                <h3><span class="num">1.</span> <span>Non consectetur a erat nam at lectus urna
                                        duis?</span></h3>
                                <div class="faq-content">
                                    <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                        laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                        rhoncus dolor purus non.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">2.</span> <span>Feugiat scelerisque varius morbi enim nunc
                                        faucibus a pellentesque?</span></h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">3.</span> <span>Dolor sit amet consectetur adipiscing elit
                                        pellentesque?</span></h3>
                                <div class="faq-content">
                                    <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                        Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                        suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                        convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">4.</span> <span>Ac odio tempor orci dapibus. Aliquam eleifend mi
                                        in nulla?</span></h3>
                                <div class="faq-content">
                                    <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                        interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                        scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                        Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et
                                        tortor consequat?</span></h3>
                                <div class="faq-content">
                                    <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse
                                        in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /Faq Section -->

        <!-- Team Section -->
        <section id="team" class="team section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Dosen</h2>
                <p>Dosen Universitas Mataram</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">
                    <?php
                    $query = mysqli_query($koneksi,"SELECT *FROM dosen");
                    while($tampil=mysqli_fetch_array($query)){

                    
                    ?>
                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="Admin/assets/img/dosen/<?=$tampil['foto']?>" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter-x"></i></a>
                                <a href="https://fb.com/<?=$tampil['facebook']?>"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4><?=$tampil['nama']?></h4>
                            <span><?=$tampil['jabatan']?></span>
                            <p><?=$tampil['alamat']?></p>

                        </div>
                    </div><!-- End Team Member -->
                    <?php }; ?>


                </div>

            </div>

        </section><!-- /Team Section -->


        <!-- Services Section -->
        <section id="fakultas" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Fakultas</h2>
                <p>Fakultas dan Program Studi Universitas Teknologi Mataram</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <?php
                      $tampil = "select *from fakultas";
                      $query = mysqli_query($koneksi, $tampil);
                       while($data = mysqli_fetch_array ($query)){
                       $fakid = $data['id_fakultas']
                      
                  ?>


                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <!-- <div class="icon flex-shrink-0"><i class="bi <?php echo $data['id']; ?>"></i></div> -->
                            <div>
                                <h4 class="title"><a href="#"
                                        class="stretched-link"><?php echo $data['nama_fakultas']; ?></a></h4>

                                <?php
                                    $tampilprodi = "select *from prodi where id_fakultas = '$fakid'";
                                    $query2 = mysqli_query($koneksi, $tampilprodi);
                                    $tprodi = mysqli_fetch_all($query2, MYSQLI_ASSOC);
                                    foreach($tprodi as $tam): ?>

                                <p class="description"><?=$tam['nama_prodi']?></p>
                                <?php endforeach ?>

                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <?php
                  $no++;
                };
                 ?>


                </div>

            </div>

        </section>


        <section id="recent-posts" class="recent-posts section">

            <div class="container">
                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                    <h2>Postingan Terbaru</h2>
                    <p>Berita Terbaru Tentang Universitas Mataram - NTB</p>
                </div><!-- End Section Title -->
                <div class="row gy-4">
                    <?php
                    include ("koneksi.php");
                   
                    
                    // 
                  $query = mysqli_query($koneksi, "SELECT
	berita.id,
	berita.judul,
	berita.isi,
	berita.kategori,
	berita.tanggal_publikasi,
	berita.gambar,
	berita.publis,
	berita.sumber,
	berita.tag,
	users.nama penulis 
FROM
	berita
	INNER JOIN users ON berita.user_id = users.id 
WHERE
	publis = 'Y' 
ORDER BY
	berita.tanggal_publikasi ASC  LIMIT 0,3;");
                  $jmldata = mysqli_num_rows($query);
                  while($tberita = mysqli_fetch_array($query)){

                  ?>
                    <div class="col-lg-4">
                        <article>

                            <div class="post-img">
                                <img src="assets/img/blog/<?=$tberita['gambar']; ?>" alt="" class="img-fluid">
                            </div>

                            <p class="post-category"><?=$tberita['kategori'];?></p>

                            <h2 class="title">
                                <a href="blog-details.php?id=<?=$tberita['id'];?>"><?=$tberita['judul'];?></a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="assets/img/blog/<?=$tberita['penulis']?>.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author"><?=$tberita['penulis']?></p>
                                    <p class=" post-date">
                                    <p><?= $tberita['tanggal_publikasi']?></p>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <?php }; ?>


                </div>
            </div>

        </section><!-- /Blog Posts Section -->
        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Hubungi kami pada Contact dibawah ini</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Alamat</h3>


                                    <p>jl. Kampus Amikom-ASM Mataram</p>
                                    <p>Mataram, Nusa Tenggara Barat, Indonesia</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Telpon</h3>
                                    <p>0819 1811 4146</p>
                                    <p>0812 3793 8364</p>
                                    <p>0859 2220 6797</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email :</h3>
                                    <p>utm@gmail.com</p>
                                    <p>utm.official@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Pelayanan</h3>
                                    <p>Senin - Sabtu</p>
                                    <p>9:00AM - 05:00PM</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                        required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-12 footer-about">
                    <a href="index.php" class="logo d-flex align-items-center">
                        <span class="sitename">Universitas Teknologi Mataram</span>
                    </a>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>



                    </div>
                </div>


                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="index.php#home" class="active">Home</a></li>
                        <li><a href="index.php#about">Tentang Kami</a></li>
                        <li><a href="index.php#services">Layanan</a></li>
                        <li><a href="index.php#portfolio">Galeri</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="index.php#pricing">Biaya Kuliah</a></li>
                        <li><a href="index.php#team">Dosen</a></li>
                        <li><a href="blog.php">Berita</a></li>
                        <li><a href="index.php#fakultas">fakultas</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="sitename">Append</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">Kelompok 7</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>