<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes Online</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{$ONLINE}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes Offline</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{$OFFLINE}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes Cadastrados</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{$CLIENTES}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Clientes Offline</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{$OFFLINE}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Clientes Cadastrados em 2020</h6>
                    </div>
                    <!-- Card Body Clients -->
                    <!-- Contém a string com dados do cliente e pego via js para o gráfico-->
                    <input id="cli" type="hidden" value="{$CLIENTES_CAD}">

                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="clientes"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>