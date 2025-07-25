@extends('layout')
@section('titulo', 'DashBoard')
@section('conteudo')
<div class="container-fluid">

  <!-- Page Heading -->


  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800 cabecalho">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-4 col-md-6 mb-6">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Membros Cadastros</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-child fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-4 col-md-6 mb-6">
          <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                              Média de presenças por culto (ano atua)</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-users fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div> 
  <div class="row mt-4">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Horas trabalhadas por mês</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>
  </div>
 
  @push('script')
    <script src="{{ URL('js/chart/Chart.min.js') }}"></script>
    <script src="{{ URL('js/home.js') }}"></script>
  @endpush
@endsection