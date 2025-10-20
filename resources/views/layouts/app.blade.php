<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Farmácia') }}</title>

        <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}  ">
        <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
    </head>
    <body >
        <div class="container-scroller">

            <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-xl-block">
                    <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                        <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Pesquisar Produtos">
                    </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                  <!--
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count-symbol bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                <i class="mdi mdi-calendar"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                            </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                <i class="mdi mdi-settings"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                            </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                <i class="mdi mdi-link-variant"></i>
                                </div>
                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                            </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                        </div>
                    </li>-->
                    <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                        <img src="assets/images/faces/face28.png" alt="image">
                        </div>
                        <div class="nav-profile-text">
                        <p class="mb-1 text-black">{{ Auth::user()->name }}</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                        <div class="p-3 text-center bg-primary">
                        <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png" alt="">
                        </div>
                        <div class="p-2">
                            <div class="ml-2 mr-3">
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                                    <span>Perfil</span>
                                    <span class="p-0">

                                    <i class="mdi mdi-account-outline ml-1"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="ml-2 mr-3">
                                  <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>Deginições</span>
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </div>


                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"  class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Sair') }}
                                 <i class="mdi mdi-logout mr-1"></i>
                            </x-dropdown-link>
                        </form>
                        </div>
                    </div>
                    </li>


                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas " id="sidebar">
                    <ul class="nav">
                        <li class="nav-item nav-category"><small>INICIO</small></li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">
                            <span class="icon-bg"><i class="mdi mdi-home menu-icon"></i></span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                        </li>
                         <li class="nav-item nav-category"><small>OPERAÇÔES</small></li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#venda" aria-expanded="false" aria-controls="ui-basic">
                                <span class="icon-bg"><i class="mdi mdi-cart menu-icon"></i></span>
                                <span class="menu-title">Vendas</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="venda">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Nova Venda</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Listagem de Vendas</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Histórico de vendas</a></li>

                                </ul>
                            </div>
                        </li>


                        <li class="nav-item nav-category"><small>ARMAZEM</small></li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                                <span class="icon-bg"><i class="mdi mdi-shopping menu-icon"></i></span>
                                <span class="menu-title">Produtos</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Novo Produto</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Listagem de Produtos</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Exgotados</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Expirados</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Validade</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Movimentação</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-category"><small>CONFI. DE PRODUTOS</small>  </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#conf_pro" aria-expanded="false" aria-controls="ui-basic">
                                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                                <span class="menu-title">Conf. de Produtos</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="conf_pro">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Categorias</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Modo de Pagamento</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-category"><small>RELATÓRIOS</small> </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#relatorio" aria-expanded="false" aria-controls="auth">
                                <span class="icon-bg"><i class="mdi mdi-file-document menu-icon"></i></span>
                                <span class="menu-title">Relatórios</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="relatorio">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Vendas </a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Financeiro</a></li>
                                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> Stock</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item nav-category"><small>CONFIGURAÇÕES</small></li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/forms/basic_elements.html">
                                <span class="icon-bg"><i class="mdi mdi-account-multiple menu-icon"></i></span>
                                <span class="menu-title">Utilizadores</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pages/forms/basic_elements.html">
                                <span class="icon-bg"><i class="mdi mdi-home-modern menu-icon"></i></span>
                                <span class="menu-title">Dados da Empresa</span>
                            </a>
                        </li>


                        <li class="nav-item sidebar-user-actions mt-5">
                            <div class="user-details">
                                <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="d-flex align-items-center">
                                    <div class="sidebar-profile-img">
                                        <img src="assets/images/faces/face28.png" alt="image">
                                    </div>
                                    <div class="sidebar-profile-text">
                                        <p class="mb-1">{{ Auth::user()->name }}</p>
                                    </div>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </li>

                    </ul>
                </nav>
                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">

                         @yield('conteudo')

                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <footer class="footer">
                        <div class="footer-inner-wraper">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
                        </div>
                        </div>
                    </footer>
                <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>

        </div>


        <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}  "></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('assets/vendors/jquery-circle-progress/js/circle-progress.min.js')}}"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{asset('assets/js/off-canvas.js')}}"></script>
        <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('assets/js/misc.js')}}"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="{{asset('assets/js/dashboard.js')}}"></script>

    </body>
</html>
