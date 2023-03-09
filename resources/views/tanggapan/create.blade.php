
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
 -->
<html lang="en">
<head>
 @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
 @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data tanggapan</h1>
            <html>
                <head>
                    <meta charset="utf-8">
                    <link name="viewport" content="width=device, initial-scale=1">
                    <meta href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
                    <title>tanggapan</title>
                </head>
        
    <div class="content">
     <div class="card card-info card-outline">
        <div class="card-header">
           <h3>Tambah Data tanggapan</h3>
            </div>
            <div class="card-body">
               <form action="{{route('simpan-tanggapan')}}" method="post">
                {{ csrf_field()}}
                <div class="form-group">
                  <input type="date" id="id_tanggapan" name="tgl_tanggapan" class="form-control" placeholder="Tanggal tanggapan">
                  </div>

                  <div class="form-group">
                  <input type="text" id="id_tanggapan" name="tanggapan" class="form-control" placeholder="tanggapan">
                  </div>

                  <div class="form-group">
                 <textarea id="id_tanggapan" name="nik" class="form-control" placeholder="nik"></textarea>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
</div>
               </form>
    </div>
</div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
   @include('Template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Template.script')

</body>
</html>
