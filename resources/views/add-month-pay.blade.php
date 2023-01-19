<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>{{$ministry->name}}  ({{$date}})</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/blue.png')}}">

        <!-- select2 css -->
        <link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
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
                                    <h4 class="mb-sm-0 font-size-18"> تــعبــئــة بـــيــانــات  </h4>

                                    <h5 class="mb-sm-0 font-size-18">{{$ministry->name}}  ({{$date}}) </h5>

                                    <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2" onclick="searchBy({{$ministry->id}})" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                        تحديد التاريخ <i class="mdi mdi-calendar-month me-1"></i>
                                    </button>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <b><a href="{{route('ministries.show',[$ministry->parent->id])}}" style="font-size: 14px;">{{$ministry->parent->name}}</a></b>
                                </div>
                            </div>

                            @include('includes.messages')

                        </div>
                        <!-- end page title -->


                        <form action="{{route('monthPayeds.store',[$ministry->id])}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{$date}}" name="date" />


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الـــبـــاب الأول</h4>
                                        <!-- <p class="card-title-desc">Fill all information below</p> -->

                                            <div class="row">

                                                @foreach ($items->where('door', 1) as $item)

                                                    @if($payeds->where('item_id', $item->id)->first())
                                                        <div class="col-sm-2">
                                                            <div class="mb-3">
                                                                <label for="fullname">{{$item->name}}</label>

                                                                {{-- @if(!$payeds->where('item_id', $item->id)->first()->given || !$payeds->where('item_id', $item->id)->first()->total) --}}
                                                                    <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                                    <input type="hidden" value="1" name="door_id[]">
                                                                {{-- @endif --}}

                                                                @if(!$payeds->where('item_id', $item->id)->first()->given)
                                                                    <input id="fullname" style="direction: rtl; margin-top: 6px;" name="price2[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المعطاة">
                                                                @else
                                                                    <p for="fullname" style="padding-top: 10px;"> المعطاة <span style="color: green;">{{number_format($payeds->where('item_id', $item->id)->first()->given)}}</span> </p>
                                                                    <input type="hidden" value="0" name="price2[]">
                                                                @endif

                                                                @if(!$payeds->where('item_id', $item->id)->first()->total)
                                                                    <input id="fullname" style="direction: rtl; margin-top: 5px;" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المصروفة">
                                                                @else
                                                                    <p for="fullname" class="mt-3"> المصروفة <span style="color: green;">{{number_format($payeds->where('item_id', $item->id)->first()->total)}}</span> </p>
                                                                    <input type="hidden" value="0" name="price[]">
                                                                @endif

                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="col-sm-2">
                                                            <div class="mb-3">
                                                                <label for="fullname" class="form-label" style="white-space: nowrap;
                                                                width: 150px;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis;
                                                                display: inline-block;">{{$item->name}}</label>

                                                                <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                                <input type="hidden" value="1" name="door_id[]">
                                                                <input id="fullname" style="direction: rtl;" name="price2[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المعطاة">
                                                                <input id="fullname" style="direction: rtl; margin-top: 5px;" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المصروفة">
                                                            </div>
                                                        </div>
                                                    @endif


                                                @endforeach
                                                <div class="col-sm-2">
                                                  <label for="fullname">المجموع</label>
                                                  <p style="color: green;" for="fullname">{{number_format($sum1)}}</p>
                                                </div>

                                                <div class="col-6">
                                                  <label for="fullname">مجموع المصروفات</label>
                                                  <p style="color: green;" for="fullname">{{number_format($sum1[0])}}</p>
                                                </div>

                                                <div class="col-6">
                                                    <label for="fullname">مجموع المعطيات</label>
                                                    <p style="color: green;" for="fullname">{{number_format($sum1[1])}}</p>
                                                </div>


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
                                            <div class="col-sm-2">
                                                <div class="mb-3">
                                                    <label for="fullname">{{$item->name}}</label>

                                                {{-- @if(!$payeds->where('item_id', $item->id)->first()->given || !$payeds->where('item_id', $item->id)->first()->total) --}}
                                                    <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                    <input type="hidden" value="2" name="door_id[]">
                                                {{-- @endif --}}

                                                @if(!$payeds->where('item_id', $item->id)->first()->given)
                                                    <input id="fullname" style="direction: rtl; margin-top: 6px;" name="price2[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المعطاة">
                                                @else
                                                    <p for="fullname" style="padding-top: 10px;"> المعطاة <span style="color: green;">{{number_format($payeds->where('item_id', $item->id)->first()->given)}}</span> </p>
                                                    <input type="hidden" value="0" name="price2[]">
                                                @endif

                                                @if(!$payeds->where('item_id', $item->id)->first()->total)
                                                    <input id="fullname" style="direction: rtl; margin-top: 5px;" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المصروفة">
                                                @else
                                                    <p for="fullname" class="mt-3"> المصروفة <span style="color: green;">{{number_format($payeds->where('item_id', $item->id)->first()->total)}}</span> </p>
                                                    <input type="hidden" value="0" name="price[]">
                                                @endif

                                                </div>
                                            </div>
                                            @else
                                            <div class="col-sm-2">
                                                <div class="mb-3">
                                                    <label for="fullname" style="white-space: nowrap;
                                                    width: 150px;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;
                                                    display: inline-block;">{{$item->name}}</label>
                                                    <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                    <input type="hidden" value="2" name="door_id[]">
                                                    <input id="fullname" style="direction: rtl;" name="price2[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المعطاة">
                                                    <input id="fullname" style="direction: rtl; margin-top: 5px;" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المصروفة">                                                </div>
                                            </div>
                                            @endif

                                        @endforeach
                                        <div class="col-sm-2">
                                                  <label for="fullname">المجموع</label>
                                                  <p style="color: green;" for="fullname">{{number_format($sum2)}}</p>
                                                </div>

                                        <div class="col-6">
                                            <label for="fullname">مجموع المصروفات</label>
                                            <p style="color: green;" for="fullname">{{number_format($sum2[0])}}</p>
                                          </div>

                                          <div class="col-6">
                                              <label for="fullname">مجموع المعطيات</label>
                                              <p style="color: green;" for="fullname">{{number_format($sum2[1])}}</p>
                                          </div>


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
                                                <div class="col-sm-2">
                                                    <div class="mb-3">
                                                        <label for="fullname">{{$item->name}}</label>

                                                    {{-- @if(!$payeds->where('item_id', $item->id)->first()->given || !$payeds->where('item_id', $item->id)->first()->total) --}}
                                                        <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                        <input type="hidden" value="3" name="door_id[]">
                                                    {{-- @endif --}}

                                                    @if(!$payeds->where('item_id', $item->id)->first()->given)
                                                        <input id="fullname" style="direction: rtl; margin-top: 6px;" name="price2[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المعطاة">
                                                    @else
                                                        <p for="fullname" style="padding-top: 10px;"> المعطاة <span style="color: green;">{{number_format($payeds->where('item_id', $item->id)->first()->given)}}</span> </p>
                                                        <input type="hidden" value="0" name="price2[]">
                                                    @endif

                                                    @if(!$payeds->where('item_id', $item->id)->first()->total)
                                                        <input id="fullname" style="direction: rtl; margin-top: 5px;" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المصروفة">
                                                    @else
                                                        <p for="fullname" class="mt-3"> المصروفة <span style="color: green;">{{number_format($payeds->where('item_id', $item->id)->first()->total)}}</span> </p>
                                                        <input type="hidden" value="0" name="price[]">
                                                    @endif

                                                </div>
                                                </div>
                                                @else
                                                <div class="col-sm-2">
                                                    <div class="mb-3">
                                                        <label for="fullname">{{$item->name}}</label>
                                                        <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                        <input type="hidden" value="3" name="door_id[]">
                                                        <input id="fullname" style="direction: rtl;" name="price2[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المعطاة">
                                                        <input id="fullname" style="direction: rtl; margin-top: 5px;" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المصروفة">                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach

                                                <div class="col-6">
                                                    <label for="fullname">مجموع المصروفات</label>
                                                    <p style="color: green;" for="fullname">{{number_format($sum3[0])}}</p>
                                                  </div>

                                                  <div class="col-6">
                                                      <label for="fullname">مجموع المعطيات</label>
                                                      <p style="color: green;" for="fullname">{{number_format($sum3[1])}}</p>
                                                  </div>


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
                                            <div class="col-sm-2">
                                                <div class="mb-3">
                                                    <label for="fullname">{{$item->name}}</label>

                                                {{-- @if(!$payeds->where('item_id', $item->id)->first()->given || !$payeds->where('item_id', $item->id)->first()->total) --}}
                                                    <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                    <input type="hidden" value="4" name="door_id[]">
                                                {{-- @endif --}}

                                                @if(!$payeds->where('item_id', $item->id)->first()->given)
                                                    <input id="fullname" style="direction: rtl; margin-top: 6px;" name="price2[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المعطاة">
                                                @else
                                                    <p for="fullname" style="padding-top: 10px;"> المعطاة <span style="color: green;">{{number_format($payeds->where('item_id', $item->id)->first()->given)}}</span> </p>
                                                    <input type="hidden" value="0" name="price2[]">
                                                @endif

                                                @if(!$payeds->where('item_id', $item->id)->first()->total)
                                                    <input id="fullname" style="direction: rtl; margin-top: 5px;" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المصروفة">
                                                @else
                                                    <p for="fullname" class="mt-3"> المصروفة <span style="color: green;">{{number_format($payeds->where('item_id', $item->id)->first()->total)}}</span> </p>
                                                    <input type="hidden" value="0" name="price[]">
                                                @endif

                                            </div>
                                            </div>
                                            @else
                                            <div class="col-sm-2">
                                                <div class="mb-3">
                                                    <label for="fullname">{{$item->name}}</label>
                                                    <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                    <input type="hidden" value="4" name="door_id[]">
                                                    <input id="fullname" style="direction: rtl;" name="price2[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المعطاة">
                                                    <input id="fullname" style="direction: rtl; margin-top: 5px;" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المصروفة">                                                </div>
                                            </div>
                                            @endif
                                        @endforeach
                                        <div class="col-sm-2">
                                                  <label for="fullname">المجموع</label>
                                                  <p style="color: green;" for="fullname">{{number_format($sum4)}}</p>
                                                </div>

                                        <div class="col-6">
                                            <label for="fullname">مجموع المصروفات</label>
                                            <p style="color: green;" for="fullname">{{number_format($sum4[0])}}</p>
                                          </div>

                                          <div class="col-6">
                                              <label for="fullname">مجموع المعطيات</label>
                                              <p style="color: green;" for="fullname">{{number_format($sum4[1])}}</p>
                                          </div>

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
                                                <div class="col-sm-2">
                                                    <div class="mb-3">
                                                        <label for="fullname">{{$item->name}}</label>

                                                    {{-- @if(!$payeds->where('item_id', $item->id)->first()->given || !$payeds->where('item_id', $item->id)->first()->total) --}}
                                                        <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                        <input type="hidden" value="5" name="door_id[]">
                                                    {{-- @endif --}}

                                                    @if(!$payeds->where('item_id', $item->id)->first()->given)
                                                        <input id="fullname" style="direction: rtl; margin-top: 6px;" name="price2[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المعطاة">
                                                    @else
                                                        <p for="fullname" style="padding-top: 10px;"> المعطاة <span style="color: green;">{{number_format($payeds->where('item_id', $item->id)->first()->given)}}</span> </p>
                                                        <input type="hidden" value="0" name="price2[]">
                                                    @endif

                                                    @if(!$payeds->where('item_id', $item->id)->first()->total)
                                                        <input id="fullname" style="direction: rtl; margin-top: 5px;" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المصروفة">
                                                    @else
                                                        <p for="fullname" class="mt-3"> المصروفة <span style="color: green;">{{number_format($payeds->where('item_id', $item->id)->first()->total)}}</span> </p>
                                                        <input type="hidden" value="0" name="price[]">
                                                    @endif
                                                </div>
                                                </div>
                                                @else
                                                <div class="col-sm-2">
                                                    <div class="mb-3">
                                                        <label for="fullname">{{$item->name}}</label>
                                                        <input type="hidden" value="{{$item->id}}" name="item_id[]">
                                                        <input type="hidden" value="5" name="door_id[]">
                                                        <input id="fullname" style="direction: rtl;" name="price2[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المعطاة">
                                                        <input id="fullname" style="direction: rtl; margin-top: 5px;" name="price[]" type="number" min="0" step="0.01" class="form-control" placeholder="القيمة المصروفة">                                                    </div>
                                                </div>
                                                @endif
                                                @endforeach


                                                <div class="col-6">
                                                    <label for="fullname">مجموع المصروفات</label>
                                                    <p style="color: green;" for="fullname">{{number_format($sum5[0])}}</p>
                                                  </div>

                                                  <div class="col-6">
                                                      <label for="fullname">مجموع المعطيات</label>
                                                      <p style="color: green;" for="fullname">{{number_format($sum5[1])}}</p>
                                                  </div>

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

                                <div class="d-flex flex-wrap gap-2 pb-3 text-center">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">حفظ المدخلات</button>
                                    <!-- <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button> -->
                                </div>
                            </form>


                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->



                <!-- Modal -->
                <div class="modal fade orderdetailsModal" tabindex="-1" role="dialog" aria-labelledby="orderdetailsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="orderdetailsModalLabel">البحث بتاريخ معين</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{-- <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                                <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p> --}}

                                <form action="{{route('monthPayeds.create',[$ministry->id])}}" method="get" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="" id="mini_id" name="id">
                                    <div class="mb-3">
                                        <label for="manufacturerbrand">تحديد التاريخ</label>
                                        <div class="input-daterange input-group" id="project-date-inputgroup" data-provide="datepicker" data-date-format="dd M, yyyy"  data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                            <input type="month" class="form-control" style="direction: rtl;" placeholder="تاريخ الاصدار" name="date" required oninvalid="this.setCustomValidity('الرجاء تحديد التاريخ')" oninput="this.setCustomValidity('')" >
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">البحث</button>

                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>

                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- end modal -->



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

        <script>
                        function searchBy(id){
    document.getElementById("mini_id").value = id;
}
        </script>
    </body>
</html>
