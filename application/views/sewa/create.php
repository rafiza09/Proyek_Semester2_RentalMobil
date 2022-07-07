<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
            <h1>Form Kelola Sewa Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Form Sewa Mobil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">Create Form Sewa Mobil</h3>

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
        <?php echo form_open('sewa/save');?>
  <div class="form-group row">
    <label for="id" class="col-4 col-form-label">Tanggal Mulai</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group date" id="datepickerDemo17">
          <i class="fa fa-"></i>
          </div>
        </div> 
        <input id="tanggal_mulai" name="tanggal_mulai" type="date" class="form-control" value="" placeholder="Masukan Tanggal Mulai">
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
        <input id="tanggal_akhir" name="tanggal_akhir" type="date" class="form-control" value="" placeholder="Masukan Tanggal Selesai">
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
        <input id="tujuan" name="tujuan" type="text" class="form-control" value="" placeholder="Masukan Tujuan Anda">
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
        <input id="noktp" name="noktp" type="text" class="form-control" value="" placeholder="Masukan NIK Anda">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="mobil_id" class="col-4 col-form-label">Mobil</label> 
    <div class="col-8">
      <select id="mobil_id" name="mobil_id" class="custom-select">
        <option value="">---Jenis Mobil---</option>
        <option value="1">Toyota Rush</option>
        <option value="2">Mitsubishi Expander</option>
        <option value="3">Suzuki Ertiga</option>
        <option value="4">Honda Mobilio</option>
      </select>
    </div>
  </div>
  <?php echo form_close();?>
  
  <?php echo form_open('sewa/save');?>
        <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('USERID')?>">
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
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