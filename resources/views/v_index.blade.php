@extends('componentes.navlateral')

@section('title', 'Página de inicio')

@section('content')
    <style>/* Mostrar datos para dispositivos de pantalla grande (PC) */

.sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 0;
}


    
</style>
<div class="container">
  <img width="100%" height="100px" src="{{ asset('imagenes/headers.png') }}" alt="" class="sticky-top"  >
  </div>

  <hr>

  <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1" style="font-size:10px"><span>Total Folios</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span id="totalgrupos">En construcción</span></div>
                                        </div>
                                        <div class="col-auto"><ion-icon  name="home-outline" style="font-size:30px; color:gray"></ion-icon></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1" style="font-size:10px"><span>Total Visitas Realizadas</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span  id="totalgruposabiertos">En construcción</span></div>
                                        </div>
                                        <div class="col-auto"><ion-icon  name="home-outline" style="font-size:30px; color:gray"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1" style="font-size:10px"><span>Total Visitas Abiertas</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span  id="totalgruposcerrados">En construcción</span></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">En construcción</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><ion-icon  name="home-outline" style="font-size:30px; color:gray"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-warning fw-bold text-xs mb-1" style="font-size:10px"><span>Total visitas sin realizar</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span  id="totalsesiones">En construcción</span></div>
                                        </div>
                                        <div class="col-auto"><ion-icon  name="home-outline" style="font-size:30px; color:gray"></div>
                                    </div>
                                </div>
                            </div>
                        </div>






  <div class="row">
                        <div class="col-lg-7 col-xl-8">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Total Visitas Por Mes</h6>
                                   
                                        <select class="form-select" id="anhoentradas6" style="display:none;font-size: 15px; width: 100px; height: 30px;">
                                            <option value="<?php echo date("Y"); ?>"><?php echo date("Y"); ?></option>                                             
                                            <option value="2023">2023</option>                                            
                                            <option value="2022">2022</option>
                                           <!-- <option value="2025">2025</option>
                                             <option value="04">Abril</option>
                                            <option value="05">Mayo</option>
                                            <option value="06">Junio</option>
                                            <option value="07">Julio</option>
                                            <option value="08">Agosto</option>
                                            <option value="09">Septiembre</option>
                                            <option value="10">Octubre</option>
                                            <option value="11">Noviembre</option>
                                            <option value="12">Diciembre</option> -->
                                        </select>
                                        

                                </div>
                                <div id="grafico3"  >
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>





                        <div class="col-lg-5 col-xl-4">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="text-primary fw-bold m-0">Estado Folios</h6>
                                    <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                        <div class="dropdown-menu shadow dropdown-menu-end animated--fade-in">
                                            <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" href="#">&nbsp;Action</a><a class="dropdown-item" href="#">&nbsp;Another action</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">&nbsp;Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="grafico2">
                                    <canvas id="doughnutChart"></canvas>
                                </div>
                            </div>
                        </div>
  </div>
 

</div>





<script src="{{ asset('resources/js/chart.js') }}" ></script>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line', // Tipo de gráfico
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
                label: 'Total Visitas Por Mes',
                data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: false,
                tension: 0.1,
                pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointBorderColor: '#fff',
                pointHoverBackgroundColor: '#fff',
                pointHoverBorderColor: 'rgba(75, 192, 192, 1)'
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Total Visitas Por Mes'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 10
                    }
                }
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById('doughnutChart').getContext('2d');
    var doughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Activos (En construcción)', 'Cerrados (En construcción)', 'Interrumpidos (En construcción)', 'Pendientes (En construcción)', 'Eliminados (En construcción)'],
            datasets: [{
                data: [97, 67, 0, 0, 1],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.5)', // Activos
                    'rgba(54, 162, 235, 0.5)', // Cerrados
                    'rgba(255, 206, 86, 0.5)', // Interrumpidos
                    'rgba(75, 192, 192, 0.5)', // Pendientes
                    'rgba(153, 102, 255, 0.5)' // Eliminados
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)', // Activos
                    'rgba(54, 162, 235, 1)', // Cerrados
                    'rgba(255, 206, 86, 1)', // Interrumpidos
                    'rgba(75, 192, 192, 1)', // Pendientes
                    'rgba(153, 102, 255, 1)' // Eliminados
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Estado Folios'
                }
            }
        }
    });
</script>


@endsection



