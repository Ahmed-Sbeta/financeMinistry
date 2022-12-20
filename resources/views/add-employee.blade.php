<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>اضافة مستخدم</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/blue.png')}}">

        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <!-- select2 css -->
        <link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-sm-0 font-size-18">إضــافـة مـسـتـخـدم جـديـد</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">بـيـانـات</h4>

                                        @include('includes.messages')

                                        <!-- <p class="card-title-desc">Fill all information below</p> -->

                                        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                                          @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="fullname">الإســم بـالـكـامـل</label>
                                                        <input id="fullname" name="name" type="text" class="form-control" placeholder="اسم الموظف" required oninvalid="this.setCustomValidity('الرجاء ادخال اسم الموظف')" oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="phonenumber">رقـم الهــاتـف</label>
                                                        <input id="phonenumber" name="phoneNumber" type="text" class="form-control" placeholder=" *** ** ** *09" required oninvalid="this.setCustomValidity('الرجاء ادخال رقم الهاتف')" oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email">كــلـمـة الــمرور</label>
                                                        <input id="email" name="password" type="password" class="form-control" required oninvalid="this.setCustomValidity('الرجاء ادخال كلمة المرور')" oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="control-label">الــوظــيفــة</label>
                                                        <select class="form-control select" name="role">
                                                            <option selected disabled>اخــتــيـار</option>
                                                            @foreach ($roles as $role)
                                                                <option value="{{$role->id}}">{{$role->role}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                  <div class="mb-3">
                                                      <label for="email">رقم الوظيفي</label>
                                                      <input id="email" name="work_id" type="text" class="form-control" required oninvalid="this.setCustomValidity('الرجاء ادخال الرقم الوظيفي')" oninput="this.setCustomValidity('')">
                                                  </div>
                                                    <div class="mb-3">
                                                        <label for="email">البــريــد الإلـكـترونـي</label>
                                                        <input id="email" name="email" type="text" class="form-control" placeholder="name@gmail.com" required oninvalid="this.setCustomValidity('الرجاء ادخال البريد الالكتروني')" oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email">إعــادة كــلـمـة الــمرور</label>
                                                        <input id="email" name="password_confirmation" type="password" class="form-control" required oninvalid="this.setCustomValidity('الرجاء اعادة ادخال كلمة المرور')" oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="code">كود التفعيل</label>
                                                        <input id="code" name="code" type="text" class="form-control" required oninvalid="this.setCustomValidity('الرجاء ادخال كود التفعيل')" oninput="this.setCustomValidity('')">
                                                    </div>
                                                </div>
                                                

                                                <div class="mt-3">
                                                    <label for="formFile" class="form-label">صــورة شــخــصــيـة</label>
                                                    <input class="form-control" type="file" id="formFile" name="image">
                                                </div>

                                            </div>

                                            <br>

                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">إضـــافـــة</button>
                                                <!-- <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button> -->
                                            </div>
                                        </form>

                                    </div>
                                </div>

                                <!-- <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">Product Images</h4>

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

                                </div>  -->
                                <!-- end card-->


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

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- select 2 plugin -->
        <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>

        <!-- dropzone plugin -->
        <script src="{{asset('assets/libs/dropzone/min/dropzone.min.js')}}"></script>

        <!-- init js -->
        <script src="{{asset('assets/js/pages/ecommerce-select2.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
