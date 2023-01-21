<!doctype html>
<html lang="en" dir="rtl" >

    <head>

        <meta charset="utf-8" />
        <title>الرئيسية</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/blue.png')}}">

        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap-rtl.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app-rtl.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <style type="text/css">
        @import url(https://fonts.googleapis.com/css2?family=Cairo:wght@500&display=swap);

        * {
          font-family: 'Cairo', sans-serif;
        }

          .box {
            height: 20px;
            width: 20px;
            margin-bottom: 15px;
            border: 1px solid black;
            clear: both;
          }

          .red {
            background-color: red;
          }

          .green {
            background-color: green;
          }

      </style>

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('includes.menu')


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">الــرئــيــســيــة</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        @include('includes.messages')


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                      @if(Auth::user()->image == "user.png")
                                                        <img src="{{asset('assets/images/users/user.png')}}" alt="" class="avatar-md rounded-circle img-thumbnail">
                                                        @else
                                                        <img src="{{asset(Storage::url(Auth::user()->image))}}" alt="" class="avatar-md rounded-circle img-thumbnail">
                                                        @endif
                                                    </div>
                                                    <div class="flex-grow-1 align-self-center">
                                                        <div class="text-muted">
                                                            <p class="mb-2">مــرحــبا بــك</p>
                                                            <h5 class="mb-1 font-weight-bold">{{Auth::user()->name}}</h5>
                                                            <p class="mb-0">{{Auth::user()->role->role}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4 align-self-center">
                                                <div class="text-lg-center mt-4 mt-lg-0">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2">الــوزارات</p>
                                                                <h5 class="mb-0">{{$ministries}}</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2">الهــيـئـات</p>
                                                                <h5 class="mb-0">{{$subMinistries}}</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2">الــبــنــود</p>
                                                                <h5 class="mb-0">{{$items}}</h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- <div class="col-lg-4 d-none d-lg-block">
                                                <div class="clearfix mt-4 mt-lg-0">
                                                    <div class="dropdown float-end">
                                                        <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bxs-cog align-middle me-1"></i> Setting
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card bg-primary bg-soft">
                                    <div>
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">وزارة المالية</h5>
                                                    <p>الصفحة الرئيسية</p>

                                                    <ul class="ps-3 mb-0">
                                                        <li class="py-1">عدد الموظفين {{$users}}</li>
                                                        {{-- <li class="py-1">مراقبين ماليين 0</li> --}}
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs me-3">
                                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                            <i class="bx bx-envelope"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-23 mb-0">الاشعارات</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4>{{$notifications}} <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs me-3">
                                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                            <i class="bx bx-task"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-23 mb-0">القرارات</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4> {{$decisionsCount}} <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                        </div>

                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="clearfix">
                                            <div class="float-end">
                                                <div class="input-group input-group-sm">
                                                    <select disabled class="form-select form-select-sm">
                                                        <option selected>{{$year}}</option>
                                                    </select>
                                                    <label class="input-group-text">السنة</label>
                                                </div>
                                            </div>
                                            <h4 class="card-title mb-4">احصائية مصروفات البنود للسنة</h4>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="text-muted">
                                                    <div class="mb-4">

                                                        <p style="color:#b91d47" >اجمالي المصروفات</p>
                                                        <h4 class="pb-3">{{number_format($total)}} د,ل</h4>
                                                        <p style="color:#00aba9">اجمالي المعطيات</p>
                                                        <h4>{{number_format($total2)}} د,ل</h4>

                                                        {{-- <div><span class="badge badge-soft-success font-size-12 me-1"> + 0.2% </span> From previous period</div> --}}
                                                    </div>

                                                    <div>
                                                        <button onclick="showYear()" class="btn btn-primary waves-effect waves-light btn-sm">تحديد السنة <i class="mdi mdi-calendar ms-1"></i></button>
                                                        <form action="{{route('yearFilter')}}" method="get">
                                                            @csrf
                                                            <input type="number" style="display: none;" max="{{now()->format('Y')}}" class="input-group-text mt-3" name="year" id="year22" placeholder="ادخل السنة" required oninvalid="this.setCustomValidity('الرجاء ادخال السنة المطلوبة')" oninput="this.setCustomValidity('')">
                                                        </form>
                                                    </div>

                                                    {{-- <div class="mt-4">
                                                        <p class="mb-2">Last month</p>
                                                        <h5>$2281.04</h5>
                                                    </div> --}}

                                                </div>
                                            </div>

                                            <div class="col-lg-8">

                                             <canvas id="myChart2"></canvas>

                                            <script>

                                                var dates = {!! json_encode($child_arr) !!};
                                                var xValues = [];
                                                for (let i = 0; i <= 12; i++) {
                                                  xValues[i] = i
                                                }
                                                // var xValues = [1,2,3,4,5,6,7,8,9,10,11,12];

                                                var chart = new Chart("myChart2", {
                                                  type: "line",
                                                  data: {
                                                    labels: xValues,
                                                    datasets: [{
                                                      data: [0,dates['all'][1],dates['all'][2],dates['all'][3],dates['all'][4],dates['all'][5],dates['all'][6],dates['all'][7],dates['all'][8],dates['all'][9],dates['all'][10],dates['all'][11],dates['all'][12]],
                                                      backgroundColor: "#b91d47",
                                                      fill: false
                                                    }, {
                                                        data: [0,dates['given'][1],dates['given'][2],dates['given'][3],dates['given'][4],dates['given'][5],dates['given'][6],dates['given'][7],dates['given'][8],dates['given'][9],dates['given'][10],dates['given'][11],dates['given'][12]],
                                                        backgroundColor: "#00aba9",
                                                      fill: false
                                                    },
                                                ]
                                                  },
                                                  options: {
                                                    legend: {display: false},
                                                    tooltips: {
                                                      callbacks: {
                                                        label: function(tooltipItem, data) {
                                                          return tooltipItem.yLabel.toLocaleString('en-US');
                                                        }
                                                      }
                                                    },
                                                      scales: {
                                                        yAxes: [
                                                          {
                                                            ticks: {
                                                              callback: function(label, index, labels) {
                                                                return label.toLocaleString('en-US');
                                                              }
                                                            },
                                                          }
                                                        ]
                                                      }

                                                  }
                                                });

                                            </script>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">إجمالي البنود</h4>

                                        <div>

                                            <canvas id="myChart" style="width:100%;"></canvas>

                                            <script>
                                            var sum = {!! json_encode($door1+$door2+$door4) !!};
                                            var door1 = ({!! json_encode($door1) !!}/ sum *100).toFixed(2);
                                            var door2 = ({!! json_encode($door2) !!}/ sum *100).toFixed(2);
                                            var door3 = ({!! json_encode($door3) !!}/ sum *100).toFixed(2);
                                            var door4 = ({!! json_encode($door4) !!}/ sum *100).toFixed(2);
                                            var door5 = ({!! json_encode($door5) !!}/ sum *100).toFixed(2);

                                            var xValues = ["الباب الاول", "الباب الثاني", "الباب الثالث", "الباب الرابع", "الباب الخامس"];
                                            var yValues = [door1, door2, door3, door4, door5];
                                            var barColors = [
                                              "#b91d47",
                                              "#00aba9",
                                              "#2b5797",
                                              "#e8c3b9",
                                              "#1e7145"
                                            ];

                                            new Chart("myChart", {
                                              type: "doughnut",
                                              data: {
                                                labels: xValues,
                                                datasets: [{
                                                  backgroundColor: barColors,
                                                  data: yValues
                                                }]
                                              },
                                              options: {
                                                legend: {
                                                  display: false
                                                },
                                              }
                                            });
                                            </script>

                                        </div>

                                        <div class="text-center text-muted">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i style="color: #b91d47 !important;" class="mdi mdi-circle text-primary me-1"></i> الباب الاول</p>
                                                        <h5> {{number_format($door1)}}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i style="color: #00aba9 !important;" class="mdi mdi-circle text-success me-1"></i> الباب الثاني</p>
                                                        <h5> {{number_format($door2)}}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i style="color: #2b5797 !important;" class="mdi mdi-circle text-danger me-1"></i> الباب الـثـالـث</p>
                                                        <h5>{{number_format($door3)}}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i style="color: #e8c3b9 !important;" class="mdi mdi-circle text-danger me-1"></i> الباب الرابع</p>
                                                        <h5>{{number_format($door4)}}</h5>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i style="color: #1e7145 !important;" class="mdi mdi-circle text-danger me-1"></i> الباب الـخـامـس</p>
                                                        <h5>{{number_format($door5)}}</h5>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- <div class="row">
                             <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="clearfix">
                                            <div class="float-end">
                                                <div class="input-group input-group-sm">
                                                    <select class="form-select form-select-sm">
                                                        <option value="JA" selected>Jan</option>
                                                        <option value="DE">Dec</option>
                                                        <option value="NO">Nov</option>
                                                        <option value="OC">Oct</option>
                                                    </select>
                                                    <label class="input-group-text">Month</label>
                                                </div>
                                            </div>
                                            <h4 class="card-title mb-4">Top Selling product</h4>
                                        </div>

                                        <div class="text-muted text-center">
                                            <p class="mb-2">Product A</p>
                                            <h4>$ 6385</h4>
                                            <p class="mt-4 mb-0"><span class="badge badge-soft-success font-size-11 me-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                                        </div>

                                        <div class="table-responsive mt-4">
                                            <table class="table align-middle mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">Product A</h5>
                                                            <p class="text-muted mb-0">Neque quis est</p>
                                                        </td>

                                                        <td>
                                                            <div id="radialchart-1" class="apex-charts"></div>
                                                        </td>
                                                        <td>
                                                            <p class="text-muted mb-1">Sales</p>
                                                            <h5 class="mb-0">37 %</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">Product B</h5>
                                                            <p class="text-muted mb-0">Quis autem iure</p>
                                                        </td>

                                                        <td>
                                                            <div id="radialchart-2" class="apex-charts"></div>
                                                        </td>
                                                        <td>
                                                            <p class="text-muted mb-1">Sales</p>
                                                            <h5 class="mb-0">72 %</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">Product C</h5>
                                                            <p class="text-muted mb-0">Sed aliquam mauris.</p>
                                                        </td>

                                                        <td>
                                                            <div id="radialchart-3" class="apex-charts"></div>
                                                        </td>
                                                        <td>
                                                            <p class="text-muted mb-1">Sales</p>
                                                            <h5 class="mb-0">54 %</h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">الــقــرارات</h4>

                                        <ul class="nav nav-pills bg-light rounded">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{route('decisions.index')}}">كــل الــقــرارات</a>
                                            </li>

                                        </ul>

                                        <div class="mt-4">
                                            <div data-simplebar style="max-height: 250px;">

                                                <div class="table-responsive">
                                                    <table class="table table-nowrap align-middle table-hover mb-0">
                                                        <tbody>
                                                            @foreach ($decisions as $des)
                                                            <tr>
                                                                <td style="width: 50px;">
                                                                    {{$des->decisionsNumber}}
                                                                </td>
                                                                <td>
                                                                    <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">{{$des->title}} </a></h5>
                                                                </td>

                                                                <td style="width: 90px;">
                                                                    {{$des->date}}
                                                                </td>
                                                                {{-- <td style="width: 90px;">
                                                                    <div>
                                                                        <ul class="list-inline mb-0 font-size-16">
                                                                            <li class="list-inline-item">
                                                                                <a href="javascript: void(0);" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <a href="javascript: void(0);" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td> --}}
                                                            </tr>
                                                            @endforeach


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer bg-transparent border-top">
                                        <div class="text-center">
                                            <a href="{{route('decisions.create')}}" class="btn btn-primary waves-effect waves-light">إضــافــة قــرار جـديـد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="clearfix">

                                            <h4 class="card-title mb-4">مــصــروفــات</h4>
                                        </div>

                                        <div class="table-responsive mt-4">
                                            <table class="table align-middle mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-25 mb-1">الــبــاب الأول</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>


                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">{{number_format($door1)}} د.ل </h5>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الــثــانـي</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>


                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">{{number_format($door2)}} د.ل</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الـثـالـث</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>

                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">{{number_format($door3)}} د.ل</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الــرابـع</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>

                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">{{number_format($door4)}} د.ل</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الـخـامـس</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>

                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">{{number_format($door5)}} د.ل</h5>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                @include('includes.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Saas dashboard init -->
        <script src="{{asset('assets/js/pages/saas-dashboard.init.js')}}"></script>

        <script>
            $( document ).ready(function() {
                document.getElementById("rtl-mode-switch").trigger('click');
        });

        function showYear(){
            // alert('here');
            if (document.getElementById("year22").style.display == "none") {
                document.getElementById("year22").style.display = "block";
            }else{
                document.getElementById("year22").style.display = "none";
            }
        }
        </script>
        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
