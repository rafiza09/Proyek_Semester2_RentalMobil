<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelola Data Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
      <?=$this->session->flashdata('massage');?>
        <div class="card-header">
          <h3 class="card-title">View Data Mobil</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        <div class="row mb-2">
            <div class="col-sm-8">
    <table class="table table-striped">
    <tbody>
        <?php
            echo'<tr><td> ID </td><td>'. ': ' .$mbl->id.'</td></tr>';
            echo'<tr><td> Nopol </td><td>'.': ' .$mbl->nopol.'</td></tr>';
            echo'<tr><td> Warna </td><td>'.': ' .$mbl->warna.'</td></tr>';
            echo'<tr><td> Biaya Sewa </td><td>'.': ' .$mbl->biaya_sewa.'</td></tr>';
            echo'<tr><td> Deskripsi </td><td>'.': ' .$mbl->deskripsi.'</td></tr>';
            echo'<tr><td> CC </td><td>'.': ' .$mbl->cc.'</td></tr>';
            echo'<tr><td> Tahun </td><td>'.': ' .$mbl->tahun.'</td></tr>';
            echo'<tr><td> Merk ID </td><td>'.': ' .$mbl->merk_id.'</td></tr>';
        ?>

    </tbody>
    </table>
    </div>
        <div class="col-sm-4">
        <?php
                $filegambar = base_url('/uploads/'.$mbl->foto);
                //echo $filegambar;
                $array = get_headers($filegambar);
                //die($array);
                $string = $array[0];
                //echo $string;
                if(strpos($string,"200")){
                    //echo 'url exists';
                    echo '<img src="'.base_url('./uploads/'. $mbl->foto).'" class="img-thumbnail" alt="foto"/>';
                }
                else{
                    //echo 'url doesn\'t exists';
                    echo '<img src="'.base_url('/uploads/no-img.jpg').'" class="img-thumbnail" alt="foto"/>';
                }
            ?>
            <br>
            Nama File : <?=$mbl->foto?>
            <?php
              echo form_open_multipart('mobil/upload_mobil');
            ?>
            <input type="hidden" name="id" value="<?=$mbl->id?>"/>
            <input type="file" class="form-control" name="foto_mobil" size="20"/>
            <input type="submit" class="btn btn-success btn-sm" value="upload"/>
            <?php
            echo form_close()
            ?>
        </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</body>
</html>