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
        <title>Project Semester2-Data Sewa Mobil</title>
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
                    <div class="col-lg-8">
                    <?=$this->session->flashdata('massage');?>
                    <div class="card-header text-center">
          <h3 class="card-title">Data Sewa Mobil Anda</h3>
        </div>
        <table class="table table-striped">
    <tbody>
        <?php
             echo'<tr><td> ID Sewa </td><td>'.': '.$swa->id.'</td></tr>';
             echo'<tr><td> Tanggal Mulai</td><td>'.': '.$swa->tanggal_mulai.'</td></tr>';
             echo'<tr><td> Tanggal Selesai </td><td>'.': '.$swa->tanggal_akhir.'</td></tr>';
             echo'<tr><td> Tujuan </td><td>'.': '.$swa->tujuan.'</td></tr>';
             echo'<tr><td> NIK </td><td>'.': '.$swa->noktp.'</td></tr>';
             echo'<tr><td> Id User </td><td>'.': '.$swa->users_id.'</td></tr>';
             echo'<tr><td> Mobil </td><td>'.': '.$swa->mobil_id.'</td></tr>';
        ?>

    </tbody>
    </table>
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
