@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data benang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data benang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data benang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/benang/update/'.$benang->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_alternatif" class="col-sm-2 col-form-label">Nama benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_alternatif" placeholder="Nama benang" value="{{ $benang->nama_alternatif}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="warna" class="col-sm-2 col-form-label">Warna benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="warna" placeholder="warna" value="{{ $benang->warna}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sifat_bahan" class="col-sm-2 col-form-label">Sifat Bahan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="sifat_bahan" placeholder="Sidat Bahan" value="{{ $benang->sifat_bahan}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="daya_serap_air" class="col-sm-2 col-form-label">Daya Serap Air</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="daya_serap_air" placeholder="Daya Serap Air" value="{{ $benang->daya_serap_air}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ukuran" class="col-sm-2 col-form-label">Ukuran Benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ukuran" placeholder="Ukuran Benang" value="{{ $benang->ukuran}}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ketahanan_benang" class="col-sm-2 col-form-label">Ukuran Benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ketahanan_benang" placeholder="Ketahanan Benang" value="{{ $benang->ketahanan_benang}}">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection