<!doctype html>
<html lang="en" dir="rtl">

<head>

    <meta charset="utf-8" />
    <title>تقارير مصروفات ومخصصات</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/blue.png')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
                                <h4 class="mb-sm-0 font-size-18"> المخصصات ضد الامصروفات الفعلية</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col-sm-9">
                                            <form action="{{url('/searchspentvsgiven/')}}" method="get" class="p-3">
                                                @csrf
                                                <div class="form-group m-0">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="name" placeholder="اسم الجهة" aria-label="Recipient's username" oninvalid="this.setCustomValidity('الرجاء ادخال اسم')" oninput="this.setCustomValidity('')">
                                                        <div class="input-group-append me-3">
                                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                        </div>
                                                        <input type="text" class="form-control" name="year" placeholder="السنه" aria-label="Recipient's username" oninvalid="this.setCustomValidity('الرجاء ادخال اسم')" oninput="this.setCustomValidity('')">
                                                        <div class="input-group-append me-3">
                                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="text-center">
                                                <br>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">المصروفات اللي فاتت الحد فقط</label>
                                                </div>
                                            </div>
                                        </div>
                                        @include('includes.messages')
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-fixed align-middle table-responsive" id="tab1">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="align-middle th-sm">اسم الجهة</th>
                                                    <th class="align-middle">1 </th>
                                                    <th class="align-middle">2 </th>
                                                    <th class="align-middle">3 </th>
                                                    <th class="align-middle">4 </th>
                                                    <th class="align-middle">5 </th>
                                                    <th class="align-middle">6</th>
                                                    <th class="align-middle">7</th>
                                                    <th class="align-middle">8</th>
                                                    <th class="align-middle">9</th>
                                                    <th class="align-middle">10</th>
                                                    <th class="align-middle">11</th>
                                                    <th class="align-middle">12</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($ministries as $ministry)
                                                <tr class='clickable-row' data-href="/moreDetails/{{$ministry->id}}">
                                                    <td class="col-3">
                                                        {{$ministry->parent->name}}/{{$ministry->name}}
                                                    </td>
                                                    @isset($payeds->where('date', $year.'-'.'01'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                    @if($payeds->where('date', $year.'-'.'01'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'01'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                    <td class="bg-danger">
                                                        مصروفات : {{number_format($payeds->where('date', $year.'-'.'01'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                        مخصصات : {{number_format($payeds->where('date', $year.'-'.'01'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                    </td>
                                                    @else
                                                    <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'01'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                        مخصصات : {{number_format($payeds->where('date', $year.'-'.'01'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                    </td>
                                                    @endif
                                                    @else
                                                    <td>0</td>
                                                    @endisset
                                                    @isset($payeds->where('date', $year.'-'.'02'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                    <@if($payeds->where('date', $year.'-'.'02'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'02'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                        <td class="bg-danger">
                                                            مصروفات : {{number_format($payeds->where('date', $year.'-'.'02'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                            مخصصات : {{number_format($payeds->where('date', $year.'-'.'02'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                        </td>
                                                        @else
                                                        <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'02'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                            مخصصات : {{number_format($payeds->where('date', $year.'-'.'02'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                        </td>
                                                        @endif
                                                        @else
                                                        <td>0</td>
                                                        @endisset
                                                        @isset($payeds->where('date', $year.'-'.'03'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                        @if($payeds->where('date', $year.'-'.'03'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'03'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                        <td class="bg-danger">
                                                            مصروفات : {{number_format($payeds->where('date', $year.'-'.'03'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                            مخصصات : {{number_format($payeds->where('date', $year.'-'.'03'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                        </td>
                                                        @else
                                                        <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'03'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                            مخصصات : {{number_format($payeds->where('date', $year.'-'.'03'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                        </td>
                                                        @endif
                                                        @else
                                                        <td>0</td>
                                                        @endisset
                                                        @isset($payeds->where('date', $year.'-'.'04'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                        @if($payeds->where('date', $year.'-'.'01'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'04'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                        <td class="bg-danger">
                                                            مصروفات : {{number_format($payeds->where('date', $year.'-'.'04'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                            مخصصات : {{number_format($payeds->where('date', $year.'-'.'04'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                        </td>
                                                        @else
                                                        <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'04'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                            مخصصات : {{number_format($payeds->where('date', $year.'-'.'04'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                        </td>
                                                        @endif
                                                        @else
                                                        <td>0</td>
                                                        @endisset

                                                        @isset($payeds->where('date', $year.'-'.'05'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                        @if($payeds->where('date', $year.'-'.'05'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'05'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                        <td class="bg-danger">
                                                            مصروفات : {{number_format($payeds->where('date', $year.'-'.'05'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                            مخصصات : {{number_format($payeds->where('date', $year.'-'.'05'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                        </td>
                                                        @else
                                                        <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'05'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                            مخصصات : {{number_format($payeds->where('date', $year.'-'.'05'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                        </td>
                                                        @endif
                                                        @else
                                                        <td>0</td>
                                                        @endisset
                                                        @isset($payeds->where('date', $year.'-'.'06'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                        <@if($payeds->where('date', $year.'-'.'06'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'06'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                            <td class="bg-danger">
                                                                مصروفات : {{number_format($payeds->where('date', $year.'-'.'06'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'06'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @else
                                                            <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'06'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'06'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @endif
                                                            @else
                                                            <td>0</td>
                                                            @endisset
                                                            @isset($payeds->where('date', $year.'-'.'07'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                            @if($payeds->where('date', $year.'-'.'07'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'07'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                            <td class="bg-danger">
                                                                مصروفات : {{number_format($payeds->where('date', $year.'-'.'07'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'07'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @else
                                                            <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'07'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'07'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @endif
                                                            @else
                                                            <td>0</td>
                                                            @endisset
                                                            @isset($payeds->where('date', $year.'-'.'08'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                            @if($payeds->where('date', $year.'-'.'08'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'08'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                            <td class="bg-danger">
                                                                مصروفات : {{number_format($payeds->where('date', $year.'-'.'08'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'08'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @else
                                                            <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'08'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'08'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @endif
                                                            @else
                                                            <td>0</td>
                                                            @endisset
                                                            @isset($payeds->where('date', $year.'-'.'09'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                            @if($payeds->where('date', $year.'-'.'09'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'09'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                            <td class="bg-danger">
                                                                مصروفات : {{number_format($payeds->where('date', $year.'-'.'09'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'09'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @else
                                                            <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'09'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'09'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @endif
                                                            @else
                                                            <td>0</td>
                                                            @endisset
                                                            @isset($payeds->where('date', $year.'-'.'10'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                            @if($payeds->where('date', $year.'-'.'10'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'10'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                            <td class="bg-danger">
                                                                مصروفات : {{number_format($payeds->where('date', $year.'-'.'10'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'10'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @else
                                                            <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'10'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'10'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @endif
                                                            @else
                                                            <td>0</td>
                                                            @endisset
                                                            @isset($payeds->where('date', $year.'-'.'11'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                            @if($payeds->where('date', $year.'-'.'11'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'11'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                            <td class="bg-danger">
                                                                مصروفات : {{number_format($payeds->where('date', $year.'-'.'11'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'11'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @else
                                                            <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'11'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'11'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @endif
                                                            @else
                                                            <td>0</td>
                                                            @endisset
                                                            @isset($payeds->where('date', $year.'-'.'12'.'-'.'01')->where('ministry_id',$ministry->id)->first()->total)
                                                            @if($payeds->where('date', $year.'-'.'12'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total') > $payeds->where('date', $year.'-'.'12'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))
                                                            <td class="bg-danger">
                                                                مصروفات : {{number_format($payeds->where('date', $year.'-'.'12'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'12'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @else
                                                            <td>مصروفات : {{number_format($payeds->where('date', $year.'-'.'12'.'-'.'01')->where('ministry_id',$ministry->id)->sum('total'))}} <br>
                                                                مخصصات : {{number_format($payeds->where('date', $year.'-'.'12'.'-'.'01')->where('ministry_id',$ministry->id)->sum('given'))}}
                                                            </td>
                                                            @endif
                                                            @else
                                                            <td>0</td>
                                                            @endisset
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <ul class="pagination pagination-rounded justify-content-center mb-2">
                                    </ul>
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

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

    <script>
        document.querySelector('#flexSwitchCheckDefault').addEventListener('click', filterTable, false);

        function filterTable(event) {
            var filter = document.getElementById("flexSwitchCheckDefault").checked;
            var rows = document.querySelector("#tab1 tbody").rows;

            if (filter === true) {
                filter = "bg-danger";
                console.log(filter);

            } else if (filter === false) {
                for (var i = 0; i < rows.length; i++) {
                    rows[i].style.display = "";
                }
                return;
            }

            for (var i = 0; i < rows.length; i++) {
                var Col1 = rows[i].cells[0];
                var Col2 = rows[i].cells[1];
                var Col3 = rows[i].cells[2];
                var Col4 = rows[i].cells[3];
                var Col5 = rows[i].cells[4];
                var Col6 = rows[i].cells[5];
                var Col7 = rows[i].cells[6];
                var Col8 = rows[i].cells[7];
                var Col9 = rows[i].cells[8];
                var Col10 = rows[i].cells[9];
                var Col11 = rows[i].cells[10];
                var Col12 = rows[i].cells[11];
                var Col13 = rows[i].cells[12];

                if (Col1.className == filter ||
                    Col2.className == filter ||
                    Col3.className == filter ||
                    Col4.className == filter ||
                    Col5.className == filter ||
                    Col6.className == filter ||
                    Col7.className == filter ||
                    Col8.className == filter ||
                    Col9.className == filter ||
                    Col10.className== filter ||
                    Col11.className== filter ||
                    Col12.className== filter ||
                    Col13.className== filter) {
                        rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
    </script>

    <script>
        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("href");
            });
        });

        function exportData(type, name) {
            var data = document.getElementById('tab1');
            var file = XLSX.utils.table_to_book(data, {
                sheet: "المنتجات"
            });
            XLSX.write(file, {
                bookType: type,
                bookSST: true,
                type: 'base64'
            });
            XLSX.writeFile(file, name + '.' + type);
        }
    </script>
</body>

</html>