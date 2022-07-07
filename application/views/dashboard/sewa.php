<?php
if(!$this->session->has_userdata('USERNAME')){
  redirect(base_url().'index.php/dashboard'); 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Project Semester2-Sewa Mobil</title>
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
                <a class="navbar-brand" href="<?php echo base_url('index.php/dashboard')?>">Back</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                </div>
            </div>
        </nav>
        <!-- Sewa-->
        <section class="page-section bg-light" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                    <div class="card-header">
          <h3 class="card-title">Sewa Mobil</h3>
        </div>
        <div class="card-body">
        <img class="img-fluid" src="<?php echo base_url('uploads/'.$mobil->foto)?>" alt="..." style="margin-bottom: 10px;"/>
        <?php echo form_open('dashboard/save');?>
        <input type="hidden" name="users_id" value="<?php echo $this->session->userdata('USERID')?>">
        <input type="hidden" name="mobil_id" value="<?php echo $mobil->id?>">
  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">Tanggal Mulai</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group date" id="datepickerDemo17">
          <i class="fa fa-"></i>
          </div>
        </div> 
        <input id="tanggal_mulai" name="tanggal_mulai" type="date" class="form-control" required="" value="" placeholder="Masukan Tanggal Mulai">
        <span class="input-group-addon tomb_calender">
        <i class=" ion ion-calendar"></i>
        </span>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">Tanggal Akhir</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group date" id="datepickerDemo17">
          <i class="fa fa-"></i>
          </div>
        </div> 
        <input id="tanggal_akhir" name="tanggal_akhir" type="date" class="form-control" required="" value="" placeholder="Masukan Tanggal Selesai">
        <span class="input-group-addon tomb_calender">
        <i class=" ion ion-calendar"></i>
        </span>
      </div>
    </div>
  </div>
<div class="form-group row">
    <label for="biaya" class="col-4 col-form-label">Tujuan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-send"></i>
          </div>
        </div> 
        <input id="tujuan" name="tujuan" type="text" class="form-control" value="" placeholder="Masukan Tujuan Anda" required="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="km_mobil" class="col-4 col-form-label">NIK</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
          <i class="bi bi-person-badge"></i>
          </div>
        </div> 
        <input id="noktp" name="noktp" type="text" class="form-control" value="" placeholder="Masukan NIK Anda" required="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div>
      <button name="submit" style="margin-top: 20px;"type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
    </div>
  </div>
<?php echo form_close();?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
       
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
