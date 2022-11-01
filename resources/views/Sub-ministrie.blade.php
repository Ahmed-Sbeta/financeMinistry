<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>Editable Table | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

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
                                    <h4 class="mb-sm-0 font-size-18">قــائــمــة الإدخــال</h4>

                                    <div class="page-title-right">

                                    </div>

                                </div>
                            </div>
                            
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            @include('includes.messages')
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الــبــاب الأول</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>إســـم الــجــهــة</th>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-id="1">
                                                        <td style="width: 80px">1</td>
                                                        <td data-field="name">David McHenry</td>
                                                        <td data-field="age">24</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td style="width: 100px">
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="2">
                                                        <td>2</td>
                                                        <td data-field="name">Frank Kirk</td>
                                                        <td data-field="age">22</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="3">
                                                        <td >3</td>
                                                        <td data-field="name">Rafael Morales</td>
                                                        <td data-field="age">26</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="4">
                                                        <td >4</td>
                                                        <td data-field="name">Mark Ellison</td>
                                                        <td data-field="age">32</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="5">
                                                        <td >5</td>
                                                        <td data-field="name">Minnie Walter</td>
                                                        <td data-field="age">27</td>
                                                        <td data-field="gender">Female</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الــبــاب الـــثانــي</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>إســـم الــجــهــة</th>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-id="1">
                                                        <td style="width: 80px">1</td>
                                                        <td data-field="name">David McHenry</td>
                                                        <td data-field="age">24</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td style="width: 100px">
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="2">
                                                        <td>2</td>
                                                        <td data-field="name">Frank Kirk</td>
                                                        <td data-field="age">22</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="3">
                                                        <td >3</td>
                                                        <td data-field="name">Rafael Morales</td>
                                                        <td data-field="age">26</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="4">
                                                        <td >4</td>
                                                        <td data-field="name">Mark Ellison</td>
                                                        <td data-field="age">32</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="5">
                                                        <td >5</td>
                                                        <td data-field="name">Minnie Walter</td>
                                                        <td data-field="age">27</td>
                                                        <td data-field="gender">Female</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الــبــاب الــثالــث</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>إســـم الــجــهــة</th>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-id="1">
                                                        <td style="width: 80px">1</td>
                                                        <td data-field="name">David McHenry</td>
                                                        <td data-field="age">24</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td style="width: 100px">
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="2">
                                                        <td>2</td>
                                                        <td data-field="name">Frank Kirk</td>
                                                        <td data-field="age">22</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="3">
                                                        <td >3</td>
                                                        <td data-field="name">Rafael Morales</td>
                                                        <td data-field="age">26</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="4">
                                                        <td >4</td>
                                                        <td data-field="name">Mark Ellison</td>
                                                        <td data-field="age">32</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="5">
                                                        <td >5</td>
                                                        <td data-field="name">Minnie Walter</td>
                                                        <td data-field="age">27</td>
                                                        <td data-field="gender">Female</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الــبــاب الــرابــع</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>إســـم الــجــهــة</th>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-id="1">
                                                        <td style="width: 80px">1</td>
                                                        <td data-field="name">David McHenry</td>
                                                        <td data-field="age">24</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td style="width: 100px">
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="2">
                                                        <td>2</td>
                                                        <td data-field="name">Frank Kirk</td>
                                                        <td data-field="age">22</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="3">
                                                        <td >3</td>
                                                        <td data-field="name">Rafael Morales</td>
                                                        <td data-field="age">26</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="4">
                                                        <td >4</td>
                                                        <td data-field="name">Mark Ellison</td>
                                                        <td data-field="age">32</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="5">
                                                        <td >5</td>
                                                        <td data-field="name">Minnie Walter</td>
                                                        <td data-field="age">27</td>
                                                        <td data-field="gender">Female</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">الــبــاب الــخــامــس</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>إســـم الــجــهــة</th>
                                                        <th>Name</th>
                                                        <th>Age</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Gender</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-id="1">
                                                        <td style="width: 80px">1</td>
                                                        <td data-field="name">David McHenry</td>
                                                        <td data-field="age">24</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td style="width: 100px">
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="2">
                                                        <td>2</td>
                                                        <td data-field="name">Frank Kirk</td>
                                                        <td data-field="age">22</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="3">
                                                        <td >3</td>
                                                        <td data-field="name">Rafael Morales</td>
                                                        <td data-field="age">26</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="4">
                                                        <td >4</td>
                                                        <td data-field="name">Mark Ellison</td>
                                                        <td data-field="age">32</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr data-id="5">
                                                        <td >5</td>
                                                        <td data-field="name">Minnie Walter</td>
                                                        <td data-field="age">27</td>
                                                        <td data-field="gender">Female</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>
                                                        <td data-field="gender">Male</td>

                                                        <td>
                                                            <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
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

                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">


                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                        <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
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

         <!-- Table Editable plugin -->
         <script src="{{asset('assets/libs/table-edits/build/table-edits.min.js')}}"></script>

        <script src="{{asset('assets/js/pages/table-editable.int.js')}}"></script>

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
