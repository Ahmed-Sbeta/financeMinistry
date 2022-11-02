<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>{{$ministry->name}}  ({{$date}})</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

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
                                    <h4 class="mb-sm-0 font-size-18"> بنود <span>{{$ministry->name}}</span> بتاريخ <span>{{$date}}</span> </h4>

                                    <form action="{{route('monthPayeds.update',[$ministry->id])}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}                                    
                                    <div class="mb-3" style="display: none;">
                                        <label for="manufacturerbrand">تحديد التاريخ</label>
                                        <div class="input-daterange input-group" id="project-date-inputgroup" data-provide="datepicker" data-date-format="dd M, yyyy"  data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                            <input type="month" class="form-control" value="{{$date}}" style="direction: rtl;" placeholder="تاريخ الاصدار" name="date" required oninvalid="this.setCustomValidity('الرجاء تحديد التاريخ')" oninput="this.setCustomValidity('')" />
                                        </div>
                                    </div>

                                    <button id="one" onclick="editState()" type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-pencil me-1"></i> تعديل</button>

                                </div>
                            </div>

                            @include('includes.messages')

                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الـــبـــاب الأول</h4>
                                        <!-- <p class="card-title-desc">Fill all information below</p> -->

                                            <div class="row">

                                                @foreach ($items->where('door', 1) as $item)

                                                    @if($payeds->where('item_id', $item->id)->first())
                                                    <div class="col-sm-2 one" id="one">
                                                        <div class="mb-3">
                                                            <label for="fullname">{{$item->name}}</label>
                                                            <p style="color: green;" for="fullname">{{$payeds->where('item_id', $item->id)->first()->total}}</p>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="col-sm-2 one" id="one">
                                                        <div class="mb-3">
                                                            <label for="fullname">{{$item->name}}</label>
                                                            <p style="color: green;" for="fullname">0</p>
                                                        </div>
                                                    </div>
                                                    @endif

                                                    <div class="col-sm-2 two" style="display: none" id="two">
                                                        <div class="mb-3">
                                                            <label for="fullname">{{$item->name}}</label>
                                                            <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                            <input type="hidden" value="1" name="door_id[]">
                                                            @if($payeds->where('item_id', $item->id)->first())
                                                            <input id="fullname" style="direction: rtl;" value="{{$payeds->where('item_id', $item->id)->first()->total}}" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المالية">
                                                            @else
                                                            <input id="fullname" style="direction: rtl;" value="" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المالية">
                                                            @endif
                                                        </div>
                                                    </div>

                                                @endforeach

                                            </div>

                                            <br>

                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الـــبـــاب الثاني</h4>
                                        <!-- <p class="card-title-desc">Fill all information below</p> -->


                                        <div class="row">
                                            @foreach ($items->where('door', 2) as $item)
                                            @if($payeds->where('item_id', $item->id)->first())
                                            <div class="col-sm-2 one" id="one">
                                                <div class="mb-3">
                                                    <label for="fullname">{{$item->name}}</label>
                                                    <p style="color: green;" for="fullname">{{$payeds->where('item_id', $item->id)->first()->total}}</p>
                                                </div>
                                            </div>
                                            @else
                                            <div class="col-sm-2 one" id="one">
                                                <div class="mb-3">
                                                    <label for="fullname">{{$item->name}}</label>
                                                    <p style="color: green;" for="fullname">0</p>
                                                </div>
                                            </div>
                                            @endif

                                            <div class="col-sm-2 two" style="display: none" id="two">
                                                <div class="mb-3">
                                                    <label for="fullname">{{$item->name}}</label>
                                                    <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                    <input type="hidden" value="2" name="door_id[]">
                                                    @if($payeds->where('item_id', $item->id)->first())
                                                    <input id="fullname" style="direction: rtl;" value="{{$payeds->where('item_id', $item->id)->first()->total}}" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المالية">
                                                    @else
                                                    <input id="fullname" style="direction: rtl;" value="" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المالية">
                                                    @endif                                                </div>
                                            </div>

                                        @endforeach

                                            </div>

                                            <br>


                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الـــبـــاب الــثــالــث</h4>
                                        <!-- <p class="card-title-desc">Fill all information below</p> -->

                                            <div class="row">
                                                @foreach ($items->where('door', 3) as $item)
                                                @if($payeds->where('item_id', $item->id)->first())
                                                <div class="col-sm-2 one" id="one">
                                                    <div class="mb-3">
                                                        <label for="fullname">{{$item->name}}</label>
                                                        <p style="color: green;" for="fullname">{{$payeds->where('item_id', $item->id)->first()->total}}</p>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-sm-2 one" id="one">
                                                    <div class="mb-3">
                                                        <label for="fullname">{{$item->name}}</label>
                                                        <p style="color: green;" for="fullname">0</p>
                                                    </div>
                                                </div>
                                                @endif

                                                <div class="col-sm-2 two" style="display: none" id="two">
                                                    <div class="mb-3">
                                                        <label for="fullname">{{$item->name}}</label>
                                                        <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                        <input type="hidden" value="3" name="door_id[]">
                                                        @if($payeds->where('item_id', $item->id)->first())
                                                        <input id="fullname" style="direction: rtl;" value="{{$payeds->where('item_id', $item->id)->first()->total}}" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المالية">
                                                        @else
                                                        <input id="fullname" style="direction: rtl;" value="" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المالية">
                                                        @endif                                                    </div>
                                                </div>

                                                @endforeach


                                            </div>

                                            <br>



                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الـــبـــاب الــرابــع</h4>
                                        <!-- <p class="card-title-desc">Fill all information below</p> -->


                                        <div class="row">
                                            @foreach ($items->where('door', 4) as $item)
                                            @if($payeds->where('item_id', $item->id)->first())
                                            <div class="col-sm-2 one" id="one">
                                                <div class="mb-3">
                                                    <label for="fullname">{{$item->name}}</label>
                                                    <p style="color: green;" for="fullname">{{$payeds->where('item_id', $item->id)->first()->total}}</p>
                                                </div>
                                            </div>
                                            @else
                                            <div class="col-sm-2 one" id="one">
                                                <div class="mb-3">
                                                    <label for="fullname">{{$item->name}}</label>
                                                    <p style="color: green;" for="fullname">0</p>
                                                </div>
                                            </div>
                                            @endif

                                            <div class="col-sm-2 two" style="display: none" id="two">
                                                <div class="mb-3">
                                                    <label for="fullname">{{$item->name}}</label>
                                                    <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                    <input type="hidden" value="4" name="door_id[]">
                                                    @if($payeds->where('item_id', $item->id)->first())
                                                    <input id="fullname" style="direction: rtl;" value="{{$payeds->where('item_id', $item->id)->first()->total}}" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المالية">
                                                    @else
                                                    <input id="fullname" style="direction: rtl;" value="" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المالية">
                                                    @endif                                                </div>
                                            </div>

                                        @endforeach



                                            </div>

                                            <br>


                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الـــبـــاب الخــامــس</h4>
                                        <!-- <p class="card-title-desc">Fill all information below</p> -->

                                            <div class="row">
                                                @foreach ($items->where('door', 5) as $item)
                                                @if($payeds->where('item_id', $item->id)->first())
                                                <div class="col-sm-2 one" id="one">
                                                    <div class="mb-3">
                                                        <label for="fullname">{{$item->name}}</label>
                                                        <p style="color: green;" for="fullname">{{$payeds->where('item_id', $item->id)->first()->total}}</p>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="col-sm-2 one" id="one">
                                                    <div class="mb-3">
                                                        <label for="fullname">{{$item->name}}</label>
                                                        <p style="color: green;" for="fullname">0</p>
                                                    </div>
                                                </div>
                                                @endif

                                                <div class="col-sm-2 two" style="display: none" id="two">
                                                    <div class="mb-3">
                                                        <label for="fullname">{{$item->name}}</label>
                                                        <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                        <input type="hidden" value="5" name="door_id[]">
                                                        @if($payeds->where('item_id', $item->id)->first())
                                                        <input id="fullname" style="direction: rtl;" value="{{$payeds->where('item_id', $item->id)->first()->total}}" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المالية">
                                                        @else
                                                        <input id="fullname" style="direction: rtl;" value="" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المالية">
                                                        @endif                                                    </div>
                                                </div>

                                                @endforeach


                                            </div>

                                            <br>



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

                                <div class="d-flex flex-wrap gap-2 pb-3 text-center" >
                                    <button type="submit" style="display: none;" class="btn btn-primary waves-effect waves-light two">حفظ التعديلات</button>
                                    <!-- <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button> -->
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
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">

                    <h5 class="m-0 me-2">مـــظــهـــر</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">أخــتــيــار مــظــهــر</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice active" type="checkbox" id="rtl-mode-switch" checked>
                        <label class="form-check-label" for="rtl-mode-switch">إضــائــة</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">مــعــتــم</label>
                    </div>


                </div>

            </div> <!-- end slimscroll-menu-->
        </div>

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

        <script>
            function editState(){
                $(".one").hide();
                $(".two").show();
            }
        </script>
    </body>
</html>
