<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>تعديل الجهة التابعة <span>{{$ministry->name}}</span></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/Fahres22.png')}}">

        <link href="{{asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

        <!-- dropzone css -->
        <link href="{{asset('assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-sm-0 font-size-18">تعديل الجهة التابعة </h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4"></h4>
                                        @include('includes.messages')

                                        <form action="{{route('ministries.update',[$ministry->id])}}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            {{ method_field('PATCH') }}
                                            <div class="row mb-4">

                                                <div class="col-sm-6">
                                                    <div>
                                                        <label for="fullname">اسم الجهة التابعة</label>
                                                        <input id="worktitle" name="name" type="text" value="{{$ministry->name}}" class="form-control" placeholder="الرجاء ادخال اسم الجهة التابعة..." required oninvalid="this.setCustomValidity('الرجاء ادخال البند')" oninput="this.setCustomValidity('')">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div>
                                                        <label for="fullname">القيمة الشهرية</label>
                                                        <input id="worktitle" name="total" style="direction: rtl;"  value="{{$ministry->total}}" type="number" min="0" step="0.01" class="form-control" placeholder="الرجاء ادخال القيمة الشهرية..." required oninvalid="this.setCustomValidity('الرجاء ادخال القيمة الشهرية')" oninput="this.setCustomValidity('')">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 mt-3">
                                                    <div>

                                                        <div class="avatar-xs mb-2">
                                                            <a href="javascript: void(0);" class="d-inline-block">
                                                                <img src="{{ asset(Storage::url($ministry->image)) }}" alt="" class="rounded-circle avatar-xs">
                                                              </a>
                                                          </div>
    

                                                        <label for="formFile" class="form-label">شعار الجهة المعنية (إختياري)</label>
                                                        <input class="form-control" type="file" id="formFile" name="image">
                                                    </div>
                                                </div>

                                            </div>



                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">حفظ التعديلات</button>
                                                <!-- <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button> -->
                                            </div>
                                    </form>

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

        <!-- bootstrap datepicker -->
        <script src="{{asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

        <!-- dropzone plugin -->
        <script src="{{asset('assets/libs/dropzone/min/dropzone.min.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
