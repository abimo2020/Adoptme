@extends('layouts.admin_default')


@section('content')
<div class="container-fluid" id="pageAdmin">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Kucing Ditemukan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_hewan}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-check fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Kucing Belum Adopsi</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $hewan_belum_teradopsi }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-cat fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Hewan Diterima</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $hewan_diacc}}</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-dog fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Kucing Sudah Diadopsi</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $hewan_teradopsi }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-home fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->



  </div>
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Testimoni</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_testimoni}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-check fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Testimoni Diterima</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $testimoni_diacc}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-check fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- /.container-fluid -->

</div>
@endsection
