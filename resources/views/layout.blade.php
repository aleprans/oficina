<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ URL('img/logo.jpg') }}" />
 
  <!-- Custom fonts for this template-->
  <link href="{{ URL('fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    
  {{-- <link href="https://fonts.googleapis.com/css?family=NunitoSans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> --}}

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
     
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- dataTables -->
  <link rel="stylesheet" href="{{ URL('datatables/dataTables.bootstrap4.min.css') }}">

  {{-- <link rel="stylesheet" href="{{ URL('css/select.css') }}"> --}}
 
  <!-- Custom styles for this template-->
  <link href="{{ URL('css/sb-admin-2.min.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ URL('css/geral.css') }}">
  
    
  <title>Praticagem SS - @yield('titulo')</title>

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('components/loading')
        @include('components/toast')

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="controle.php">
                <div class="sidebar-brand-icon">
                    <img src="{{ URL('img/logo.png') }}" alt="logo" style="width: 70%;" />
                </div>
                <div class="sidebar-brand-text mx-2" style="color: #313131;">Praticagem SS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <!-- Nav Item  -->
            <li class="nav-item" id="dashboard">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item" id="corretivas">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-exchange-alt"></i>
                    <span>Corretivas</span></a>
            </li>
            <li class="nav-item" id="preventivas">
                <a class="nav-link" href="">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Preventivas</span></a>
            </li>
            <li class="nav-item" id="horimetros">
              <a class="nav-link" href="">
                <i class="fas fa-fw fa-users"></i>
                <span>Horimetros</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>SAIR</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-link dropdown-toggle" >
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()}}</span>
                                <img class="img-profile rounded-circle"
                                src="{{ URL('img/undraw_profile.svg') }}">
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('conteudo')
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Pranstech 2025&copy;</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
  
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>



  <!-- BOOTSTRAP -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- jquery-mask -->
  <script src="{{ URL('js/jquery.mask.js') }}"></script>
        
  <!-- DATATABLES -->
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.1.8/b-3.2.0/b-html5-3.2.0/b-print-3.2.0/datatables.min.js"></script>

  <!-- Custom scripts for all pages-->
    <script src="{{ URL('js/sb-admin-2.min.js') }}"></script>
    
    <script src="{{ URL('js/geral.js') }}"></script>
    @stack('script')
     
</body>

</html>