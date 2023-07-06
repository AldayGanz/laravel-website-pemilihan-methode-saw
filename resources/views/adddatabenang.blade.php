@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Benang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Benang</li>
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
                <h3 class="card-title">Add Benang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/benang/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_alternatif" class="col-sm-2 col-form-label">Nama Benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_alternatif" placeholder="Nama benang">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="warna" class="col-sm-2 col-form-label">Warna Benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="warna" placeholder="Warna Benang">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sifat_bahan" class="col-sm-2 col-form-label">Sifat Bahan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="sifat_bahan" placeholder="Sifat Bahan">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="daya_serap_air" class="col-sm-2 col-form-label">Daya Serap Air</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="daya_serap_air" placeholder="Daya Serap Air">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ukuran" class="col-sm-2 col-form-label">Ukuran Benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ukuran" placeholder="Ukuran Benang">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ketahanan_benang" class="col-sm-2 col-form-label">Ketahanan Benang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ketahanan_benang" placeholder="Ketahanan Benang">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Tambahkan</button>
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