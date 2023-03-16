
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
            <!-- <h1 class="m-0">Data tanggapan</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data tanggapan</li> -->
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
           <h3>Tambah Data tanggapan</h3>
            </div>
            <div class="card-body">
               <form action="{{route('simpan-tanggapan')}}" method="post" >
                {{ csrf_field()}}
                <div class="form-group">
                            <label class="col-lg-4 col-form-label" for="val-tanggal_kerusakan">Pengaduan  </label>
                            <div class="col-lg-6">
                                <select name="id_pengaduan" id="" class="form-control">
                                    <option value="">-- Pilih Pengaduan --</option>
                                    <!-- Barang -->
                                    @foreach($pengaduan as $pengaduan)
                                        <option value="{{ $pengaduan->id_pengaduan }}">{{ $pengaduan->isi_laporan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Tanggapan</label>
                            <input type="date" name="tgl_tanggapan" class="form-control" placeholder=""></input>

                            @if($errors->has('tgl_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_tanggapan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tanggapan</label>
                            <input type="text" name="tanggapan" class="form-control"></input>

                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control"></input>

                             @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                            <input type="submit" class="btn btn-success" value="Simpan">
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
