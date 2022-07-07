<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perawatan</title>
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
            <h1>Kelola Perawatan Mobil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Index</li>
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
          <h3 class="card-title">Daftar Perawatan Mobil</h3>

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
            <a class="btn btn-success" role = 'button' style = 'color: white' href="perawatan/create">Create Kelola Perawatan </a> 
            <br>
            <br>
            <table class="table table-bordered table-stripped">
    <thead class="thead-light">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">ID Perawatan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Biaya</th>
      <th scope="col">Km Mobil</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">ID Mobil</th>
      <th scope="col">ID Jenis Perawatan</th>
      <th scope="col">Activies</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach ($list_perawatan as $row) {
            echo'<tr><td>'.$nomor.'</td>';
            echo'<td>'.$row->id.'</td>';
            echo'<td>'.$row->tanggal.'</td>';
            echo'<td>'.$row->biaya.'</td>';
            echo'<td>'.$row->km_mobil.'</td>';
            echo'<td>'.$row->deskripsi.'</td>';
            echo'<td>'.$row->mobil_id.'</td>';
            echo'<td>'.$row->jenis_perawatan_id.'</td>';
        ?>
            <td><a href="perawatan/view?id=<?=$row->id;?>" role='button' class='btn btn-primary btn-sm'> View </a><a href="perawatan/edit?id=<?=$row->id;?>" role='button' class='btn btn-success btn-sm'> Edit </a><a href="perawatan/delete?id=<?=$row->id;?>" onclick='if(!confirm("Anda Yakin Ingin Menghapus Data Mobil Ini?")) {return false}' role='button' class='btn btn-danger btn-sm'>Delete</a></td></tr>
        <?php
            $nomor++;
            }
        ?>
    </tbody>
    </table>
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