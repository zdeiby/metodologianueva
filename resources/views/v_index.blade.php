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
                      <!--  <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1" style="font-size:10px"><span>Total Folios</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span id="totalgrupos">{{$numerodefolios}}</span></div>
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
                                            <div class="text-dark fw-bold h5 mb-0"><span  id="totalgruposabiertos">{{$numerodevisitasrealiadas}}</span></div>
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
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span  id="totalgruposcerrados">{{$numerodevisitasabiertas}}</span></div>
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
                                            <div class="text-dark fw-bold h5 mb-0"><span  id="totalsesiones">{{$numerodevisitassinrealizar}}</span></div>
                                        </div>
                                        <div class="col-auto"><ion-icon  name="home-outline" style="font-size:30px; color:gray"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

-->



        <div class="row">
        <!-- Columna 1: Totales -->
        <div class="col-md-8">
            <div class="row">
            <!-- Tarjeta 1 -->
            <div class="col-md-6 mb-3">
                <div class="card border-start-primary shadow py-2">
                <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col me-2">
                                <div class="text-uppercase text-primary fw-bold text-xs mb-1" style="font-size:13px"><span>Total Folios</span></div>
                                <div class="text-dark fw-bold h5 mb-0"><span id="totalgrupos">{{$numerodefolios}}</span></div>
                            </div>
                            <div class="col-auto"><ion-icon  name="home-outline" style="font-size:30px; color:gray"></ion-icon></div>
                        </div>
                    </div>
                </div>
            </div>

      <!-- Tarjeta 2 -->
      <div class="col-md-6 mb-3">
        <div class="card border-start-success shadow py-2">
          <div class="card-body">
                <div class="row align-items-center no-gutters">
                    <div class="col me-2">
                        <div class="text-uppercase text-primary fw-bold text-xs mb-1" style="font-size:13px"><span>Total Visitas Realizadas</span></div>
                        <div class="text-dark fw-bold h5 mb-0"><span  id="totalgruposabiertos">{{$numerodevisitasrealiadas}}</span></div>
                    </div>
                    <div class="col-auto"><ion-icon  name="home-outline" style="font-size:30px; color:gray"></div>
                </div>
            </div>
        </div>
      </div>

      <!-- Tarjeta 3 -->
      <div class="col-md-6 mb-3">
        <div class="card border-start-info shadow py-2">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="text-uppercase text-primary fw-bold text-xs mb-1" style="font-size:13px">Total Visitas Abiertas</div>
                <div class="text-dark fw-bold h5 mb-0">{{ $numerodevisitasabiertas }}</div>
              </div>
              <ion-icon name="home-outline" style="font-size:30px; color:gray"></ion-icon>
            </div>
          </div>
        </div>
      </div>

      <!-- Tarjeta 4 -->
      <div class="col-md-6 mb-3">
        <div class="card border-start-warning shadow py-2">
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="text-uppercase text-primary fw-bold text-xs mb-1" style="font-size:13px">Total Visitas Sin Realizar</div>
                <div class="text-dark fw-bold h5 mb-0">{{ $numerodevisitassinrealizar }}</div>
              </div>
              <ion-icon name="home-outline" style="font-size:30px; color:gray"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Columna 2: Prioridades -->
  <div class="col-md-4">
    <div class="card shadow border-0 p-1" style="border-radius: 20px;">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="text-uppercase text-danger fw-bold text-xs mb-1" style="font-size:13px">PRIORIDAD VISITA</h5>
          <ion-icon name="notifications-outline" style="font-size:30px; color:orange"></ion-icon>
        </div>
        <div class="mb-2 d-flex justify-content-between text-success fw-bold">
          <span class="text-uppercase text-success fw-bold text-xs mb-1" style="font-size:13px">ALTA:</span>
          <span class="text-uppercase text-success fw-bold text-xs mb-1" style="font-size:13px">{{ $prioridadAlta ?? 0 }} HOGARES</span>
        </div>
        <div class="mb-2 d-flex justify-content-between text-success fw-bold">
          <span class="text-uppercase text-success fw-bold text-xs mb-1" style="font-size:13px">MEDIA ALTA:</span>
          <span class="text-uppercase text-success fw-bold text-xs mb-1" style="font-size:13px">{{ $prioridadMediaAlta ?? 0 }} HOGARES</span>
        </div>
        <div class="mb-2 d-flex justify-content-between text-success fw-bold">
          <span class="text-uppercase text-success fw-bold text-xs mb-1" style="font-size:13px">MEDIA:</span>
          <span class="text-uppercase text-success fw-bold text-xs mb-1" style="font-size:13px">{{ $prioridadMedia ?? 0 }} HOGAR{{ ($prioridadMedia ?? 0) == 1 ? '' : 'ES' }}</span>
        </div>
        <div class="mb-2 d-flex justify-content-between text-success fw-bold">
          <span class="text-uppercase text-success fw-bold text-xs mb-1" style="font-size:13px">BAJA:</span>
          <span class="text-uppercase text-success fw-bold text-xs mb-1" style="font-size:13px">{{ $prioridadBaja ?? 0 }} HOGAR{{ ($prioridadBaja ?? 0) == 1 ? '' : 'ES' }}</span>
        </div>
      </div>
    </div>
    <br>
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
    var visitasData = [];
    var etiquetasMeses = [];
     <?php foreach ($numerodevisitaspormes as $visita): ?>
        visitasData.push(<?= $visita['total_visitas'] ?>);
        etiquetasMeses.push('<?= $visita['mes'] ?>'); // Asumiendo que 'mes' contiene el nombre del mes
    <?php endforeach; ?>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line', // Tipo de gráfico
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            datasets: [{
                label: 'Total Visitas Por Mes',
                data: visitasData,
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
  let numerodefolios=  <?= $numerodefolios ?>;
  let numerodevisitasrealiadas=  <?= $numerodevisitasrealiadas ?>;
  let numerodevisitasabiertas=  <?= $numerodevisitasabiertas ?>;
  let numerodevisitassinrealizar=  <?= $numerodevisitassinrealizar ?>;
    var ctx = document.getElementById('doughnutChart').getContext('2d');
    var doughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [`Total Folios: ${numerodefolios}`, `Total Visitas Realizadas: ${numerodevisitasrealiadas}`, `Total Visitas Abiertas: ${numerodevisitasabiertas}`, `Total visitas sin realizar: ${numerodevisitassinrealizar}`],
            datasets: [{
                data: [numerodefolios, numerodevisitasrealiadas,numerodevisitasabiertas , numerodevisitassinrealizar],
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



