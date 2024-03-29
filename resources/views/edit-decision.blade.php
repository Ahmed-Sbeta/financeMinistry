<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>اضافة قرار</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/blue.png')}}">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <link href="{{asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

        <!-- dropzone css -->
        <link href="{{asset('assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap-rtl.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app-rtl.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <!-- select2 -->
        <link rel="stylesheet" href="{{asset('assets\libs\select2\css\select2.min.css')}}">
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
                                    <h4 class="mb-sm-0 font-size-18">إضــافــة قــرار جـديـد</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">بــيــانـات الــقــرار</h4>
                                        @include('includes.messages')

                                        <form action="{{route('decisions.update',[$decision->id])}}" method="Post" enctype="multipart/form-data">
                                          @csrf
                                          @METHOD('Patch')
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="fullname" style="font-size: 130%;">عــنــوان القــرار</label>
                                                        <input id="fullname" value="{{$decision->title}}" name="title" type="text" class="form-control" placeholder="عنوان القرار" required oninvalid="this.setCustomValidity('الرجاء ادخال عنوان القرار')" oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="control-label">جهة صادرة</label>
                                                        <select class="form-control select js-example-basic-single" multiple="multiple" name="issuer" required oninvalid="this.setCustomValidity('الرجاء اختيار الجهة الصادرة')" oninput="this.setCustomValidity('')">
                                                            <option selected value="{{$decision->issuer}}">{{$decision->issuer1->name}}</option>
                                                            @foreach($ministries as $ministry)
                                                            <option value="{{$ministry->id}}">{{$ministry->name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="manufacturerbrand">تاريخ الاصدار</label>
                                                        <div class="input-daterange input-group" id="project-date-inputgroup" data-provide="datepicker" data-date-format="dd M, yyyy"  data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                                            <input type="date" class="form-control" value="{{$decision->date}}" placeholder="تاريخ الاصدار" name="date" required oninvalid="this.setCustomValidity('الرجاء تحديد تاريخ القرار')" oninput="this.setCustomValidity('')" />
                                                        </div>                                                    </div>
                                                        <div class="mb-3">
                                                            <label for="manufacturerbrand">موضوع القرار</label>
                                                            <input id="fullname" name="subject" type="text" value="{{$decision->subject}}" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('الرجاء ادخال موضوع القرار')" oninput="this.setCustomValidity('')">
                                                          </div>
                                                          <div class="mb-3">
                                                              <label for="manufacturerbrand">مدة القرار الي تاريخ</label>
                                                              <div class="input-daterange input-group" id="project-date-inputgroup" data-provide="datepicker" data-date-format="dd M, yyyy"  data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                                                  <input type="date" value="{{$decision->expire}}" class="form-control" placeholder="تاريخ الاصدار" name="expire" required oninvalid="this.setCustomValidity('الرجاء تحديد تاريخ القرار')" oninput="this.setCustomValidity('')" />
                                                              </div>                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="phonenumber" style="font-size: 130%;">رقــم القــرار</label>
                                                        <input id="phonenumber" name="decisionNumber" value="{{$decision->decisionsNumber}}" type="text" class="form-control" placeholder="00000" required oninvalid="this.setCustomValidity('الرجاء ادخال رقم القرار')" oninput="this.setCustomValidity('')">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="control-label">جهة المستلمة</label>
                                                        <input id="fullname" name="receiving" type="text" value="{{$decision->receiver}}" class="form-control" placeholder="" required oninvalid="this.setCustomValidity('الرجاء ادخال عنوان القرار')" oninput="this.setCustomValidity('')">

                                                    </div>

                                                    <div class="mb-3">
                                                    <label for="productdesc">نتــائــج اللــجــنــة</label>
                                                        <textarea class="form-control" id="productdesc" rows="6" name="description" placeholder="">{{$decision->results}}</textarea>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                            </div> -->

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">الـــقــرار</h4>

                                            <div class="fallback">
                                                <input name="file" type="file" multiple value="{{$decision->file}}">
                                            </div>

                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                </div>

                                                <h4>{{$decision->file}}</h4>
                                            </div>
                                    </div>


                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">مـــوافــق</button>
                                            </div>
                                    </div>
                                </div>
                              </form>

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

        <!-- select 2 plugin -->
        <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>

        <!-- dropzone plugin -->
        <script src="{{asset('assets/libs/dropzone/min/dropzone.min.js')}}"></script>

        <!-- init js -->
        <script src="{{asset('assets/js/pages/ecommerce-select2.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script src="{{asset('assets/libs/select2/js/select2.full.min.js')}}" charset="utf-8"></script>
        <script>
            $( document ).ready(function() {
                $('.js-example-basic-single').select2({
                  dir: "rtl",
                  maximumSelectionLength: 1 ,

                });
                $('.js-example-basic-multiple').select2();

                document.getElementById("rtl-mode-switch").trigger('click');
        });
        </script>

    </body>
</html>
