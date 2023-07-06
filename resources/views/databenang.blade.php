@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Benang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Benang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Benang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{ url('benang/add') }}" class="btn-sm btn-success">Tambahkan Data Benang</a>
                <br/><br/>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Benang</th>
                    <th>Warna Benang</th>
                    <th>Sifat Bahan</th>
                    <th>Daya Serap Air</th>
                    <th>Ukuran</th>
                    <th>Ketahanan Benang</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($users as $i => $benang)
                  <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $benang->nama_alternatif }}</td>
                    <td>{{ $benang->warna }}</td>
                    <td>{{ $benang->sifat_bahan }}</td>
                    <td>{{ $benang->daya_serap_air }}</td>
                    <td>{{ $benang->ukuran }}</td>
                    <td>{{ $benang->ketahanan_benang }}</td>
                    <td>
                      <a href="{{ url('benang/edit/'.$benang->id) }}" class="btn-xs btn-primary">Edit</a>
                      <a href="{{ url('benang/delete/'.$benang->id) }}" class="btn-xs btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  @endsection
