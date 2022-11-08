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
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap-rtl.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app-rtl.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

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
                            <div class="col-xl-4">
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
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-sm-4">
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
                                                    <h4>3 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
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
                                                    <h4> 10 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="avatar-xs me-3">
                                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                                            <i class="bx bx-receipt"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-23 mb-0">التقارير</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4> 2 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="clearfix">
                                            <div class="float-end">
                                                <div class="input-group input-group-sm">
                                                    <label class="input-group-text">سنة {{now()->format('Y')}}</label>
                                                </div>
                                            </div>
                                            <h4 class="card-title mb-4">إجـمـالـي الـمـصـروفـات</h4>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="text-muted">
                                                    <div class="mb-4">
                                                        <p>هـذه الـسـنـة</p>
                                                        <h4>${{$total}}</h4>
                                                        {{-- <div><span class="badge badge-soft-success font-size-12 me-1"> + 0.2% </span> عن السنة الماضية</div> --}}
                                                    </div>


                                                    <div class="row">
                                                    <div class="mt-2 col-6">
                                                        <p class="mb-2">الباب الأول</p>
                                                        <h5>${{$total1}}</h5>
                                                    </div>
                                                    <div class="mt-2 col-6">
                                                        <p class="mb-2">الباب الثاني</p>
                                                        <h5>${{$total2}}</h5>
                                                    </div>
                                                    </div>
                                                    <div class="row">

                                                    <div class="mt-2 col-6">
                                                        <p class="mb-2">الباب الثالث</p>
                                                        <h5>${{$total3}}</h5>
                                                    </div>
                                                    <div class="mt-2 col-6">
                                                        <p class="mb-2">الباب الرابع</p>
                                                        <h5>${{$total4}}</h5>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p class="mb-2">الباب الخامس</p>
                                                        <h5>${{$total5}}</h5>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-8">
                                                <div id="line-chart" class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">احــصائــيات</h4>

                                        <div>
                                            <div id="donut-chart" class="apex-charts"></div>
                                        </div>

                                        <div class="text-center text-muted">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary me-1"></i> الباب 1</p>
                                                        <h5>$ {{$door1}}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success me-1"></i> الباب 2</p>
                                                        <h5>$ {{$door2}}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i> الباب 3</p>
                                                        <h5>$ {{$door3}}</h5>
                                                    </div>
                                                </div>
                                                @if($door4 > 0)
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i> الباب 4</p>
                                                        <h5>$ {{$door4}}</h5>
                                                    </div>
                                                </div>
                                                @endif
                                                @if($door5 > 0)
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i> الباب 5</p>
                                                        <h5>$ {{$door5}}</h5>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <!-- <div class="col-xl-4">
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

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">الــقــرارات</h4>

                                        <ul class="nav nav-pills bg-light rounded">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">كــل الــقــرارات</a>
                                            </li>

                                        </ul>

                                        <div class="mt-4">
                                            <div data-simplebar style="max-height: 250px;">

                                                <div class="table-responsive">
                                                    <table class="table table-nowrap align-middle table-hover mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width: 50px;">

                                                                </td>
                                                                <td>
                                                                    <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">قـرار زيادة المرتبات </a></h5>
                                                                    <p class="text-muted mb-0">وزارة العمل</p>
                                                                </td>
                                                                <td style="width: 90px;">
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
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">قـرار زيادة المرتبات </a></h5>
                                                                    <p class="text-muted mb-0">وزارة العمل</p>
                                                                </td>
                                                                <td>
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
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">قـرار زيادة المرتبات </a></h5>
                                                                    <p class="text-muted mb-0">وزارة العمل</p>
                                                                </td>
                                                                <td>
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
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">قـرار زيادة المرتبات </a></h5>
                                                                    <p class="text-muted mb-0">وزارة العمل</p>
                                                                </td>
                                                                <td>
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
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">قـرار زيادة المرتبات </a></h5>
                                                                    <p class="text-muted mb-0">وزارة العمل</p>
                                                                </td>
                                                                <td>
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
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">قـرار زيادة المرتبات </a></h5>
                                                                    <p class="text-muted mb-0">وزارة العمل</p>
                                                                </td>
                                                                <td>
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
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>

                                                                </td>
                                                                <td>
                                                                    <h5 class="text-truncate font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">قـرار زيادة المرتبات </a></h5>
                                                                    <p class="text-muted mb-0">وزارة العمل</p>
                                                                </td>
                                                                <td>
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
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer bg-transparent border-top">
                                        <div class="text-center">
                                            <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light">إضــافــة قــرار جـديـد</a>
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
                                                            <h5 class="mb-0">${{$door1}}</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الــثــانـي</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>


                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">${{$door2}}</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الـثـالـث</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>

                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">${{$door3}}</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الــرابـع</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>

                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">${{$door4}}</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الـخـامـس</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>

                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">${{$door5}}</h5>
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
        </script>
        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
