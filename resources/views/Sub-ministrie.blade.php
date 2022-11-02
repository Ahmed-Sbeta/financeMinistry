<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>الجهات التابعة</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/Fahres22.png')}}">

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
                                    <h4 class="mb-sm-0 font-size-18"> <span>{{$ministry->name}}</span> الجهات التابعة لها </h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-4">

                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-sm-end">
                                                    <a href="{{route('ministries.create',[$ministry->id])}}" type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> إضـــافــة جهة تابعة جديدة</a>
                                                </div>
                                            </div><!-- end col-->
                                            @include('includes.messages')

                                        </div>

                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap table-check">
                                                <thead class="table-light">
                                                    <tr>

                                                        <th scope="col" style="width: 70px;">#</th>
                                                        <th scope="col">الإســـم</th>
                                                        <th scope="col">القيمة الشهرية</th>
                                                        <th scope="col">تفاصيل</th>
                                                        <th scope="col">تعبئة</th>
                                                        <th class="col">تـعـديـل</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($all as $mini)
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-xs">
                                                              <a href="javascript: void(0);" class="d-inline-block">
                                                                  <img src="{{ asset(Storage::url($mini->image)) }}" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <h5 class="font-size-14 mb-1"><a href="javascript: void(0);" class="text-dark">{{$mini->name}}</a></h5>
                                                        </td>

                                                        <td>
                                                            {{$mini->total}}
                                                        </td>

                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            @if(auth()->user()->role_id == 1)
                                                            <a href="{{route('monthPayeds.show',[$mini->id])}}" class="btn btn-primary btn-sm btn-rounded">
                                                                عــرض الـتـفـاصيل
                                                            </a>
                                                            @else
                                                            -
                                                            @endif
                                                        </td>

                                                        <td>
                                                            @if($mini->chilldren->count() > 0)
                                                            <a href="{{route('ministries.show',[$mini->id])}}" class="btn btn-primary btn-sm btn-rounded">
                                                                الجـهات الفرعية
                                                            </a>
                                                            @else
                                                            <button type="button" class="btn btn-success btn-sm btn-rounded" onclick="searchBy({{$mini->id}})" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                                تعبئة <i class="mdi mdi-calendar-month me-1"></i> 
                                                            </button>
                                                            @endif

                                                        </td>

                                                        <td>
                                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                                <li class="list-inline-item px-2">
                                                                    <a href="{{route('ministries.edit',[$mini->id])}}" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                                </li>
                                                                <li class="list-inline-item px-2">
                                                                    <a href="{{route('ministries.create',[$mini->id])}}" class="text-success"><i class="mdi mdi-plus font-size-18"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                        <ul class="pagination pagination-rounded justify-content-center mb-2">
                                            {{ $all->links('pagination::bootstrap-4') }}
                                        </ul>
                                    </div>
                                </div>
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

                                <form action="{{route('monthPayeds.create',[$ministry->id])}}" method="post" enctype="multipart/form-data">
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

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
<script>
            function searchBy(id){ 
    document.getElementById("mini_id").value = id;
}
</script>
    </body>
</html>
