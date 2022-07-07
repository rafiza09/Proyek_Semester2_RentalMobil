<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Project Semester 2</title>
        <!-- Favicon-->
        <link rel="icon" typepool;.h="image/x-icon" href="<?php echo base_url('assets/favicon.ico')?>" />
        <!-- Bootstrap Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <!-- Google fonts-->
        <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700')?>" rel="stylesheet" />
        <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic')?>" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css')?>" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url('css/styles.css')?>" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Rental Mobil</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#galery">Galery</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sewa">Sewa Mobil</a></li>
                        <?php
                            if($this->session->has_userdata('USERNAME')){
                                echo '<li class="nav-item"><a class="nav-link" href="">'.$this->session->userdata('USERNAME').'</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="'.base_url('index.php/login/logout').'">Logout</a></li>';
                            }
                            else{
                        ?>
                        <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
                        <?php
                            }
                        ?>
                        <?php
                         if($this->session->userdata('ROLE') == 'administrator'){
                         ?>
                        <li class="nav-item"><a class="nav-link" href="mobil">Login As Administrator</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-mobil">
            <div class="container px-4 px-lg-5 h-100">
            <?=$this->session->flashdata('massage');?>
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Project Rental Mobil</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Ini merupakan Landing Page Rental Mobil untuk tugas Project Akhir Semester 2</p>
                        <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Website ini menyediakan pengalaman terbaik untuk menyewa mobil dengan mudah. Anda hanya cukup login dan pilih jenis mobil anda dan tanggal keberangkatan hingga selesai. Kualitas terbaik dan kenyamanan menjadi prioritas kami dengan harga yang sangat murah!</p>
                        <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-check-lg fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Best Car Choice</h3>
                            <p class="text-muted mb-0">Cars with the best choice for driving!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-shield-check fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Guaranteed Security</h3>
                            <p class="text-muted mb-0">Guaranteed safety with accident, injury and failure insurance.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-wrench fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Good car Maintenance</h3>
                            <p class="text-muted mb-0">Car maintenance for the convenience of tenants.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-cash-coin fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Low Price</h3>
                            <p class="text-muted mb-0">Low price with best quality!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Galery -->
        <section class="page-section bg-light text-black" id="galery">
        <div id="portfolio">
            <div class="container-fluid p-0 px-4 px-lg-5">
                <h2 class="text-center mt-0">Galery Mobil</h2>
                <hr class="divider divider-dark"/>
                <br>
                <div class="row g-0">
                <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" href="<?php echo base_url('assets/img/portfolio/fullsize/toyota.jpg')?>" title="Project Name">
                            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/fullsize/toyota.jpg')?>" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white"><b>Toyota Rush</b></div>
                                <div class="project-name">Toyota Rush memiliki desain yang dinamis dan tangguh layaknya sebuah SUV namun mampu menampung hingga 7 orang penumpang layaknya sebuah MPV. Tak heran bila banyak para pecintan MPV langsung ingin beralih ke Toyota Rush</div>
                            </div>
                        </a>
                </div> 
                <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" href="<?php echo base_url('assets/img/portfolio/fullsize/mitsubishi.jpg')?>" title="Project Name">
                            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/thumbnails/mitsubishi.jpg')?>" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white"><b>Mitsubishi Expander</b></div>
                                <div class="project-name">Low multi purpose vehicle (LMPV) jadi salah satu segmen yang paling banyak diminati konsumen di Indonesia. Banyak yang menjadikannya mobil keluarga karena kapasitasnya yang dapat menampung hingga tujuh orang. Salah satu mobil LMPV yang terlaris di pasaran adalah Mitsubishi Xpander.</div>
                            </div>
                        </a>
                </div>
                <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" href="<?php echo base_url('assets/img/portfolio/fullsize/honda.jpg')?>" title="Project Name">
                            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/thumbnails/honda.jpg')?>" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white"><b>Honda Mobilio</b></div>
                                <div class="project-name" role="button">Mobil Honda Mobilio dibekali dengan mesin tipe bensin berkubikasi 1.496 cc dan didukung teknologi i-VTEC. LMPV berpenggerak depan tersebut diklaim mampu merilis daya mencapai 118 Ps dan torsi sampai dengan 145 Nm.</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <a class="portfolio-box" href="<?php echo base_url('assets/img/portfolio/fullsize/suzuki.jpg')?>" title="Project Name">
                            <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/thumbnails/suzuki.jpg')?>" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white"><b>Suzuki Ertiga</b></div>
                                <div class="project-name">Mobil buatan Suzuki Indonesia ini bisa dibilang punya kenyamanan yang sangat baik. Mobil berkapasitas 7 penumpang ini bisa menjadi alternatif lain bagi yang kurang suka dengan Toyota Avanza, Daihatsu Xenia dan Honda Mobilio.</div>
                            </div>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sewa Mobil-->
        <section class="page-section bg-secondary text-white" id="sewa">
        <div id="portfolio">
            <div class="container-fluid p-0 px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Sewa Mobil</h2>
                        <hr class="divider" />
                        <p class="text-white mb-5">Harap login terlebih dahulu sebelum menyewa!</p>
                    </div>
            <div class="row g-0"> 
            <?php
                foreach ($list_mobil as $mobil) {
                    ?>

                    <div class="col-lg-3 col-sm-5" style="margin-bottom: 10px;">
                        <a class="portfolio-box" href="dashboard/sewa?id=<?=$mobil->id?>" title="Project Name">
                        <img class="img-fluid" src="<?php echo base_url('uploads/'.$mobil->foto)?>" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50"><?=$mobil->nopol?></div>
                                <div class="project-name"><?=$mobil->deskripsi?></div>
                            </div>
                        </a>
                        <a class="btn btn-success btn-lg" style="margin-top:5px;" role = 'button' style = 'color: white' href="dashboard/sewa?id=<?=$mobil->id?>">Sewa Mobil Ini</a> 
                    </div>
                    <?php
                    }
                    ?>
                </div>
                </div>
            </div>
        </div>
        </section>
         <!-- Call to action-->
         <section class="page-section bg-dark text-white" id="list">
            <div class="container px-4 px-lg-5 text-center">
            <h2 class="text-white mt-0">List Data Penyewa Mobil</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white mb-5">Pastikan Data Anda Berada Di List!</p>
            <div class="card-body">
            <table class="table table-bordered table-stripped text-white">
    <thead class="thead-light">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">ID Sewa</th>
      <th scope="col">Tanggal Mulai</th>
      <th scope="col">Tanggal Selesai</th>
      <th scope="col">Tujuan</th>
      <th scope="col">NIK</th>
      <th scope="col">ID User</th>
      <th scope="col">ID Mobil</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach ($list_sewa as $row) {
            echo'<tr><td>'.$nomor.'</td>';
            echo'<td>'.$row->id.'</td>';
            echo'<td>'.$row->tanggal_mulai.'</td>';
            echo'<td>'.$row->tanggal_akhir.'</td>';
            echo'<td>'.$row->tujuan.'</td>';
            echo'<td>'.$row->noktp.'</td>';
            echo'<td>'.$row->users_id.'</td>';
            echo'<td>'.$row->mobil_id.'</td>';
            $nomor++;
            }
        ?>
    </tbody>
    </table>
        </div>
            <br>
            <br>
        </section>
        <!-- Contact-->
        <section class="page-section" id="login">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Login Untuk Mulai Berkendara!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Siap untuk pengalaman terbaik untuk berkendara? Login/Register untuk memilih jenis kendaraanmu!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <?php echo form_open('login/otentikasi')?>
        <div class="input-group mb-3" id="login">
        <div class="input-group-append">
            <div class="input-group-text">
            <span class="bi-file-earmark-person-fill"></span>
            </div>
          </div>
          <input type="text" class="form-control" 
          placeholder="Masukan Username" name="username">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-append">
            <div class="input-group-text">
            <span class="bi-key-fill"></span>
            </div>
          </div>
          <input type="password" class="form-control" 
          placeholder="Masukan Password" name="password">
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          <!-- /.col -->
        </div>
      <p class="mb-0">
      <a href="register/index">Register New Member</a>
      </p>
        <?php echo form_close()?>
    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2022 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js')?>"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url('js/scripts.js')?>"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="<?php echo base_url('https://cdn.startbootstrap.com/sb-forms-latest.js')?>"></script>
        <script src="<?php echo base_url('js/sweetalert2.all.min.js')?>"></script>
        <script src="<?php echo base_url('js/myscript.js')?>"></script>
    </body>
</html>
