<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <div class="p-5 bg-primary text-white text-center">
  <h1>My First Bootstrap 5 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
  </header>
  <main>
    <!-- Begin Page Content -->
<div class="container-fluid">

<!-- row ux-->
<div class="row">
<div  class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-danger shadow h-100 py-2 bg-primary">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div  class="text-md font-weight-bold text-white text-uppercase mb-1">Lorem</div>
<div  class="h1 mb-0 font-weight-bold text-white">
   
</div>
</div>
<div class="col-auto">
<a href="<?=base_url('user/anggota');?>"><i class="fas fa-users fa-3x text-warning"></i></a>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-3 col-md-6  mb-4">
<div class="card border-left-primary shadow h-100 py-2 bg-warning">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div class="text-md font-weight-bold text-white text-uppercase mb-1">Lorem</div>
<div class="h1 mb-0 font-weight-bold text-white">
<?php
// $where = ['stok != 0'];
// $totalstok = $this->ModelBuku->total('stok',$where);
// echo $totalstok;
?>
</div>
</div>
<div class="col-auto">
<!-- <a  href="<?=base_url('buku');?>"><i class="fas fa-book fa-3x text-primary"></i></a> -->
</div>
</div>
</div>
</div>
</div>

<div  class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-success shadow h-100 py-2 bg-danger">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div  class="text-md font-weight-bold text-white text-uppercase mb-1">Lorem</div>
<div  class="h1 mb-0 font-weight-bold text-white">
<?php
// $where = ['dipinjam != 0'];
// $totaldipinjam  =  $this->ModelBuku->total('dipinjam',$where);
// echo $totaldipinjam;
?>
</div>
</div>
<div class="col-auto">
<a href="<?=base_url('user');?>"><i class="fas fa-user-tag fa-3x text-success"></i></a>
</div>
</div>
</div>
</div>
</div>

<div  class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-warning shadow h-100 py-2 bg-success">
<div class="card-body">
<div class="row no-gutters align-items-center">
<div class="col mr-2">
<div  class="text-md font-weight-bold text-white text-uppercase mb-1">lorem</div>
<div  class="h1 mb-0 font-weight-bold text-white">
<?php
// $where = ['dibooking !=0'];
// $totaldibooking = $this->ModelBuku->total('dibooking', $where);
// echo $totaldibooking;
?>
</div>
</div>
<div class="col-auto">
<a  href="<?=base_url('user');?>"><i class="fas fa-shopping-cart fa-3x text-danger"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end row ux-->

<!-- Divider -->
<hr class="sidebar-divider">

<!--  row table-->
<div class="row">
<div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
<div class="page-header">
<span class="fas fa-users text-primary mt-2">Data User</span>
<a class="text-danger" href="<?php echo base_url('user');?>"><i class="fas fa-search mt-2 float-right">Tampilkan</i></a>
</div>
<!-- <table class="table mt-3">
<thead>
<tr>
<th>#</th>
<th>Nama Anggota</th>
<th>Email</th>
<th>Role ID</th>
<th>Aktif</th>

</tr>
</thead>
<tbody>
<?php
$i=1;
foreach ($anggota as $a){
?>
<tr>
<td><?=$i++; ?></td>
<td><?=$a['nama'];?></td>
<td><?=$a['email'];?></td>
<td><?=$a['role_id'];?></td>
<td><?=$a['is_active'];?></td>
</tr>
<?php } ?>
</tbody>
</table> -->
</div>

<div class="table-responsive table-bordered col-sm-5 ml-auto mr-auto mt-2">
<div class="page-header">
<span class="fas fa-book text-warning mt-2">Data Buku</span>
<!-- <a href="<?=base_url('buku');?>"><i class="fas fa-search text-primary mt-2 float-right">Tampilkan</i></a> -->
</div>
<div class="table-responsive">
<!-- <table  class="table mt-3" id="table-datatable">
<thead>
<tr>
<th>#</th>
<th>Judul  Buku</th>
<th>Pengarang</th>
<th>Penerbit</th>
<th>Tahun Terbit</th>
<th>ISBN</th>
<th>Stok</th>
</tr>
</thead>
<tbody>
<?php
$i = 1;
foreach ($buku as $b) { ?>
    <tr>
    <td><?=$i++; ?></td>
    <td><?=$b['judul_buku'];?></td>
    <td><?=$b['pengarang'];?></td>
    <td><?=$b['penerbit'];?></td>
    <td><?=$b['tahun_terbit']; ?></td>
    <td><?=$b['isbn'];?></td>
    <td><?=$b['stok'];?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table> -->
    </div>
    </div>
    
    </div>
    <!-- end of row table-->
    
    </div>
    <!-- /.container-fluid -->
    
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>