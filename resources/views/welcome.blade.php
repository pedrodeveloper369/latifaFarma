@extends('layouts.app')
@section('conteudo')

    <div class="d-xl-flex justify-content-between align-items-start">
    <h2 class="text-dark font-weight-bold mb-2"> Latifa-Farma </h2>
    <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

        <div class=" ml-0 ml-md-4 mt-2 mt-lg-0">
            <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>

        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border">
        <ul class="nav nav-tabs tab-transparent" role="tablist">
            <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab" aria-selected="true">Utilizadores</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Negócio</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Estoque</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Relatórios</a>
            </li>
        </ul>

        </div>
        <div class="tab-content tab-transparent-content">
        <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
            <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body text-center">
                    <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                    <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                    <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                    <p class="mt-4 mb-0">Completed</p>
                    <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body text-center">
                    <h5 class="mb-2 text-dark font-weight-normal">Unique Visitors</h5>
                    <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                    <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                    <p class="mt-4 mb-0">Increased since yesterday</p>
                    <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                </div>
                </div>
            </div>
            <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body text-center">
                    <h5 class="mb-2 text-dark font-weight-normal">Impressions</h5>
                    <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                    <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                    <p class="mt-4 mb-0">Increased since yesterday</p>
                    <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                <div class="card">
                <div class="card-body text-center">
                    <h5 class="mb-2 text-dark font-weight-normal">Followers</h5>
                    <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                    <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                    <p class="mt-4 mb-0">Decreased since yesterday</p>
                    <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                <div class="card-body">
                    <div class="row">


                    <div class="col-md-12   ">
                        <div class="pl-0 pl-lg-4 ">
                        <div class="d-xl-flex justify-content-between align-items-center mb-2">
                            <div class="d-lg-flex align-items-center mb-lg-2 mb-xl-0">
                            <h3 class="text-dark font-weight-bold mr-2 mb-0">Devices sales</h3>
                            <h5 class="mb-0">( growth 62% )</h5>
                            </div>
                            <div class="d-lg-flex">
                            <p class="mr-2 mb-0">Timezone:</p>
                            <p class="text-dark font-weight-bold mb-0">GMT-0400 Eastern Delight Time</p>
                            </div>
                        </div>
                        <div class="graph-custom-legend clearfix" id="device-sales-legend"></div>
                        <canvas id="device-sales"></canvas>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>
        </div>
    </div>
    </div>



@endsection
