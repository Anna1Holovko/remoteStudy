@extends('layouts.appch')
@section('content')

<!-- {{ $users }} -->

  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="/" class="simple-text logo-normal">
          DEDUCATION
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/machart">
              <i class="now-ui-icons design_app"></i>
              <p>Статистика</p>
            </a>
          </li>
           <li class="active ">
            <a href="/appusers">
              <i class="now-ui-icons design_app"></i>
              <p>Користувачі</p>
            </a>
          </li>
             <li class="active ">
            <a href="/appteacher">
              <i class="now-ui-icons design_app"></i>
              <p>Викладачі</p>
            </a>
          </li>
          <li class="active ">
            <a href="/appmarks">
              <i class="now-ui-icons design_app"></i>
              <p>Успішність</p>
            </a>
          </li>
           <li class="active ">
            <a href="/apprank">
              <i class="now-ui-icons design_app"></i>
              <p>Рейтинг</p>
            </a>
          </li>
         
           <li class="active-pro">
            <h5>Адмін</h5><a>{{Auth::user()->name}}<span></span></a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
              Вийти
            </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <!-- <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute"> -->
       <!--  <div class="container-fluid">
          <div class="navbar-wrapper"> -->
            <!-- <div class="navbar-toggle"> -->
             <!--  <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button> -->
          <!--   </div>
            <a class="navbar-brand" href="#pablo">Статистика зареєстрованих користувачів щомісячно</a>
          </div> -->
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button> -->
          <!-- <div class="collapse navbar-collapse justify-content-end" id="navigation"></div> -->
        <!-- </div> -->
      <!-- </nav> -->
      <!-- End Navbar -->
   <!--    <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
      </div> -->
      <div class="content">
    <!--     <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header"> -->
                <!-- <h5 class="card-category">Global Sales</h5> -->
<!--                 <h4 class="card-title">Кількість усього зареєстрованих користувачів</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Щойно оновлено
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h4 class="card-title">Оцінки користувачів</h4>
                <div class="dropdown">
                  <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                    <i class="now-ui-icons loader_gear"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item text-danger" href="#">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69"></i> Щойно оновлено
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h4 class="card-title">Оцінки користувачів</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="barChartSimpleGradientsNumbers"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons ui-2_time-alarm"></i>Оновлено 7 днів тому
                </div>
              </div>
            </div>
          </div>
        </div> -->
    <!--      <div class="row">
                   <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Зареєстровані користувачі додатку</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Ім'я
                      </th>
                      <th>
                        Прізвище
                      </th>
                      <th>
                        email
                      </th>
                      <th class="text-right">
                        Тип
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Anna
                        </td>
                        <td>
                          Jhons
                        </td>
                        <td>
                          annajhons1@gmail.com
                        </td>
                        <td class="text-right">
                          student
                        </td>
                      </tr>
                       </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> -->
         <!--  <div class="col-md-6">
            <div class="card">
              <div class="card-header"> -->
                <!-- <h5 class="card-category">All Persons List</h5> -->
<!--                 <h4 class="card-title"> Результати тестів зареєстрованих користувачі додатку</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Ім'я
                      </th>
                      <th>
                        Прізвище
                      </th>
                      <th>
                        email
                      </th>
                      <th class="text-right">
                        Тема
                      </th>
                      <th class="text-right">
                        Оцінка
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Anna
                        </td>
                        <td>
                          Jhons
                        </td>
                        <td>
                          annajhons1@gmail.com
                        </td>
                        <td class="text-right">
                          Bootstrap
                        </td>
                        <td class="text-right">
                          9
                        </td>
                      </tr>
                       </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> -->
        <!-- </div> -->
      <!-- </div> -->


<!-- DIAGRAMS OF STATISTICS -->
<div class="row">
    <div style="width: 100%">
                    <h1 style="text-align: center;">{{ $chart1->options['chart_title'] }}</h1>
                    {!! $chart1->renderHtml() !!}
                <hr />
    </div>
  </div>

    <div style="width: 100%">

                    <h1 style="text-align: center;">{{ $chart4->options['chart_title'] }}</h1>
                    {!! $chart4->renderHtml() !!}<br><br>
                  <hr />
    </div>

        <div style="width: 100%">

                    <h1 style="text-align: center;">{{ $chart5->options['chart_title'] }}</h1>
                    {!! $chart5->renderHtml() !!}<br><br>
                  <hr />
    </div>
    
    <div style="width: 50% ; margin-left: 25%;">

                    <h1 style="text-align: center;">{{ $chart2->options['chart_title'] }}</h1>
                    {!! $chart2->renderHtml() !!}<br><br>
                  <hr />
    </div>
    
                    <h1 style="text-align: center;">{{ $chart3->options['chart_title'] }}</h1>
                  <div style="width: 50%; margin-left: 25%;">  {!! $chart3->renderHtml() !!}
                    <h5 style="text-align: center;">де, 13 - Bootstrap, 14 - JavaScript, 15 - Angular</h5>
                    <hr />
    </div>


<!-- </div> -->

     



      <!--  <div class="row">
               <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header "> -->
                <!-- <h5 class="card-category">Backend development</h5> -->
<!--                 <h4 class="card-title">Що потрібно зробити</h4>
              </div>
              <div class="card-body ">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Оповістити Anna Jhons про проходження тесту Angular</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Додати новий тест Laravel</td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" checked>
                              <span class="form-check-sign"></span>
                            </label>
                          </div>
                        </td>
                        <td class="text-left">Перевірити зарплатню працівників
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                            <i class="now-ui-icons ui-2_settings-90"></i>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                            <i class="now-ui-icons ui-1_simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Оновлено 3 хвилини тому
                </div>
              </div>
            </div>
          </div>
        </div> -->


      <footer class="footer">
        <div class="container-fluid">
    
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>
            <!-- , Designed by  -->
           <!--  <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>. -->
          </div>
        </div>
      </footer>
    </div>
  </div>

<!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
@endsection

@section('javascript')
{!! $chart1->renderChartJsLibrary() !!}

{!! $chart1->renderJs() !!}
{!! $chart2->renderJs() !!}
{!! $chart3->renderJs() !!}
{!! $chart4->renderJs() !!}
{!! $chart5->renderJs() !!}


@endsection