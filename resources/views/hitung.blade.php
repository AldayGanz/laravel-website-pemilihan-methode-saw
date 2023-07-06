@extends('layout.page')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perhitungan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><input type="button" value="Kembali" onclick="history.back(-1)" /></li>
              <li class="breadcrumb-item active">Perhitungan</li>
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
                <h3 class="card-title">Bobot</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>{{ $widget1['kriteria'] }}</th>
                    <th>{{ $widget2['kriteria'] }}</th>
                    <th>{{ $widget3['kriteria'] }}</th>
                    <th>{{ $widget4['kriteria'] }}</th>
                    <th>{{ $widget5['kriteria'] }}</th>
                  </tr>
                  </thead>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Normalisasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama Alternatif</th>
                    <th>Warna</th>
                    <th>Sifat Bahan</th>
                    <th>Daya Serap Air</th>
                    <th>Ukuran</th>
                    <th>Ketahanan Benang</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $benang)
                    <tr>
                        <td>{{$benang->nama_alternatif }}</td>
                        <td>{{$benang->warna / $C1max['benang']}}</td>
                        <td>{{$benang->sifat_bahan / $C2max['benang']}}</td>
                        <td>{{$benang->daya_serap_air / $C3max['benang']}}</td>
                        <td>{{$benang->ukuran / $C4max['benang']}}</td>
                        <td>{{$benang->ketahanan_benang / $C5max['benang']}}</td>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hasil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nama Alternatif</th>
                    <th>Hasil</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $benang)
                    <tr>
                        <td>{{$benang->nama_alternatif}}</td>
                        {{-- Hasil --}}
                        <td>
                            {{(($benang->warna / $C1max['benang'])*$widget1['kriteria'])+
                            (($benang->sifat_bahan / $C2max['benang'])*$widget2['kriteria'])+
                            (($benang->daya_serap_air / $C3max['benang'])*$widget3['kriteria'])+
                            (($benang->ukuran / $C4max['benang'])*$widget4['kriteria'])+
                            (($benang->ketahanan_benang / $C5max['benang'])*$widget5['kriteria'])}}
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
