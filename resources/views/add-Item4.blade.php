<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>إضــافــة بند (الباب الرابع)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/blue.png')}}">

        <link href="{{asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- dropzone css -->
        <link href="{{asset('assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-sm-0 font-size-18">إضــائــة بــنــد جديد <a href="{{route('items.show',[4])}}">(الباب الرابع)</a></h4>



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

                                        <form action="{{route('items.store',[4])}}" method="post" enctype="multipart/form-data">
                                            @csrf                                            <div class="row mb-4">
                                                <label for="worktitle" class="col-form-label col-lg-2" style="font-size:140%;">أســم الــبــنــد</label>
                                                <div class="col-lg-10">
                                                    <input id="worktitle" name="worktitle" type="text" class="form-control" placeholder="الرجاء ادخال بند الباب الرابع..." required oninvalid="this.setCustomValidity('الرجاء ادخال البند')" oninput="this.setCustomValidity('')">
                                                </div>
                                            </div>





                                            <!-- <div class="row mb-4">
                                                <label for="projectbudget" class="col-form-label col-lg-2">Budget</label>
                                                <div class="col-lg-10">
                                                    <input id="projectbudget" name="projectbudget" type="text" placeholder="Enter Project Budget..." class="form-control">
                                                </div>
                                            </div> -->

                                        <!-- <div class="row mb-4">
                                            <label class="col-form-label col-lg-2">Attached Files</label>
                                            <div class="col-lg-10">
                                                <form action="/" method="post" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>

                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                        </div>

                                                        <h4>Drop files here or click to upload.</h4>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> -->
                                        <div class="row justify-content-end">
                                            <div class="col-lg-10">

                                                <button type="submit" class="btn btn-info"> <i class="mdi mdi-plus me-1"></i>إضـــافـــة</button>

                                                <!-- <button type="submit" class="btn btn-success"> Upload </button> -->

                                            </div>

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
