
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
            <h1 class="m-0">Data Tanggapan</h1>
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
            <div class="card-tools">
                <a href="{{route('/tanggapan/create')}}" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                          <th>isi laporan</th>
                          <th>tgl_tanggapan</th>
                          <th>tanggapan</th>
                          <th>nik</th>
                          <th>OPSI</th>
                    </tr>
                        @foreach ($tanggapan as $p)
                        @foreach ($pengaduan as $d)
                        <tr>
                            <td>{{ $d->isi_laporan }}</td>
                            <td>{{ $p->tgl_tanggapan }}</td>
                            <td>{{ $p->tanggapan }}</td>
                            <td>{{ $p->nik }}</td>
                            <td>
                                <a href="/tanggapan/destroy/{{ $p->id_tanggapan }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach
         </table>
    </div>
    <div class="card-footer">
    <!-- -->
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

@include('sweetalert::alert')
</body>
</html>
