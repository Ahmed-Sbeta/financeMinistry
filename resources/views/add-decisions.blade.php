<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>اضافة قرار</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/mawja22.png')}}">

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


            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/white.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/white.png')}}" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/white.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/white.png')}}" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>




                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> الإشــعــارات </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> عــرض الـكـل</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-your-order">إجتماع يوم الأحد</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">إجتماع بخصوص منطومه يوم الاحد بالمكتب</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">محمود علي محمد</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-simplified">إجتماع بخصوص منطومه يوم الاحد بالمكتب</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1" key="t-shipped">إجتماع يوم الأحد</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">إجتماع بخصوص منطومه يوم الاحد بالمكتب</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="javascript: void(0);" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="assets/images/users/avatar-4.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">محمود علي محمد</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-occidental">إجتماع بخصوص منطومه يوم الاحد بالمكتب</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">عرض المزيد..</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/user.png"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">محمود محمد</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">شخصي</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">تسجيل خروج</span></a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu" >عام</li>

                            <li>
                                <a href="{{route('home')}}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <span key="t-file-manager " style="font-size: 130%">الرئـــيــســـيـــة</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('reports.index')}}" class="waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span class="badge rounded-pill bg-info float-end"></span>
                                    <span key="t-file-manager " style="font-size: 130%">تـقــاريــر</span>
                                </a>
                            </li>

                            <li class="menu-title" key="t-apps">الإدارة</li>


                            <li>
                                <a href="{{route('ministries.index')}}" class="waves-effect">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                                    <span key="t-file-manager" style="font-size: 130%">الجـــهـــات</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="bx bx-calendar"></i><span class="badge rounded-pill bg-success float-end">New</span>
                                    <span key="t-dashboards" style="font-size: 130%">الــبــنــود</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                  <li><a href="{{route('items.show',[1])}}" key="t-full-calendar">البــاب الأول</a></li>
                                  <li><a href="{{route('items.show',[2])}}" key="t-full-calendar">البــاب الــثــاني</a></li>
                                  <li><a href="{{route('items.show',[3])}}" key="t-full-calendar">البــاب الــثــالــث</a></li>
                                  <li><a href="{{route('items.show',[4])}}" key="t-full-calendar">البــاب الــرابــع</a></li>
                                  <li><a href="{{route('items.show',[5])}}" key="t-full-calendar">البــاب الــخــامــس</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-task"></i>
                                    <span key="t-ecommerce" style="font-size: 130%">الــقــرارات</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('decisions.index')}}">كــل الــقــرارات </a></li>
                                    <li class="active"><a href="{{route('decisions.create')}}">إنــشــاء قــرار</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-envelope"></i>
                                    <span key="t-email" style="font-size: 130%">الإشــعــارات</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('notifications.index')}}" key="t-inbox">كــل الإشــعــارات</a></li>
                                    <li><a href="{{route('notifications.create')}}" key="t-read-email">إرســال إشــعــار</a></li>

                                </ul>
                            </li>
                            <!-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-receipt"></i>
                                    <span key="t-invoices">Invoices</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                                    <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                                </ul>
                            </li> -->

                            <!-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-briefcase-alt-2"></i>
                                    <span key="t-projects">Projects</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="projects-grid.html" key="t-p-grid">Projects Grid</a></li>
                                    <li><a href="projects-list.html" key="t-p-list">Projects List</a></li>
                                    <li><a href="projects-overview.html" key="t-p-overview">Project Overview</a></li>
                                    <li><a href="projects-create.html" key="t-create-new">Create New</a></li>
                                </ul>
                            </li> -->

                            <!-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-task"></i>
                                    <span key="t-tasks">Tasks</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tasks-list.html" key="t-task-list">Task List</a></li>
                                    <li><a href="tasks-kanban.html" key="t-kanban-board">Kanban Board</a></li>
                                    <li><a href="tasks-create.html" key="t-create-task">Create Task</a></li>
                                </ul>
                            </li> -->


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-user-detail"></i>
                                    <span key="t-contacts" style="font-size: 130%">الــمــسـتــخـدمـيـن</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('users.index')}}">كــل المـستـخـدمـيـن</a></li>
                                    <li><a href="{{route('users.create')}}" key="t-user-list">إضـافـة مـسـتـخـدم جـديـد</a></li>
                                    <!-- <li><a href="contacts-profile.html" key="t-profile">Profile</a></li> -->
                                </ul>
                            </li>

                            <!-- <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                                    <i class="bx bx-detail"></i>
                                    <span key="t-blog">Blog</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="blog-list.html" key="t-blog-list">Blog List</a></li>
                                    <li><a href="blog-grid.html" key="t-blog-grid">Blog Grid</a></li>
                                    <li><a href="blog-details.html" key="t-blog-details">Blog Details</a></li>
                                </ul>
                            </li> -->


                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->



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

                                        <form>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="fullname" style="font-size: 130%;">عــنــوان القــرار</label>
                                                        <input id="fullname" name="fullname" type="text" class="form-control" placeholder="عنوان القرار">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="control-label">جهة صادرة</label>
                                                        <select class="form-control select">
                                                            <option>الجهه</option>
                                                            <option  >Visual Identity Design </option>
                                                            <option value="EL">Content Writing</option>
                                                            <option  >Graphic Design </option>
                                                            <option  >Web Desgin </option>
                                                            <option  >Billboard Design </option>
                                                            <option  >Animation </option>
                                                            <option  > product photography  </option>

                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="manufacturerbrand">تاريخ الاصدار</label>
                                                        <div class="input-daterange input-group" id="project-date-inputgroup" data-provide="datepicker" data-date-format="dd M, yyyy"  data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                                            <input type="date" class="form-control" placeholder="تاريخ الاصدار" name="start" />
                                                        </div>                                                    </div>

                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="mb-3">
                                                        <label for="phonenumber" style="font-size: 130%;">رقــم القــرار</label>
                                                        <input id="phonenumber" name="phonenumber" type="text" class="form-control" placeholder="00000">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="control-label">جهة المستلمة</label>
                                                        <select class="form-control select">
                                                            <option>الجهه</option>
                                                            <option  >Visual Identity Design </option>
                                                            <option value="EL">Content Writing</option>
                                                            <option  >Graphic Design </option>
                                                            <option  >Web Desgin </option>
                                                            <option  >Billboard Design </option>
                                                            <option  >Animation </option>
                                                            <option  > product photography  </option>

                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="productdesc">الــقــرار بإختصار</label>
                                                        <textarea class="form-control" id="productdesc" rows="6" placeholder="نبذه عن القرار"></textarea>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                                                <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                            </div> -->
                                        </form>

                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">الـــقــرار</h4>

                                        <form action="/" method="post" class="dropzone">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                </div>

                                                <h4>قم بإدخال ملف هنا.</h4>
                                            </div>
                                        </form>
                                    </div>


                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">



                                            <div class="d-flex flex-wrap gap-2">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">إضافة</button>
                                            </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © MAWJA.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by MAWJA
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
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
        </div><!-- /Right-bar -->

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
