
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
            <!-- <h1 class="m-0">Data Pengaduan</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pengaduan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
     <div class="card card-info card-outline">
        <div class="card-header">
           <h3>Tambah Data Pengaduan</h3>
            </div>
            <div class="card-body">
               <form action="{{route('simpan-pengaduan')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-group">
                  <input type="date" id="id_pengaduan" name="tgl_pengaduan" class="form-control" placeholder="Tanggal pengaduan">
                  </div>

                  <div class="form-group">
                  <input type="number" id="id_pengaduan" name="nik" class="form-control" placeholder="NIK">
                  </div>

                  <div class="form-group">
                 <textarea id="id_pengaduan" name="isi_laporan" class="form-control" placeholder="Isi Laporan"></textarea>
                  </div>

                  <div class="form-group">
                 <input type="file" id="id_pengaduan" name="foto" class="form-control" placeholder="">
                  </div>

                  <div class="form-group">
                 <strong>status</strong>
                 <br>
                 <input type="radio" name="status" value="proses"> Proses</p>
                 <input type="radio" name="status" value="proses"> Selesai</p>
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
