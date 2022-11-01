<!doctype html>
<html lang="en" dir="rtl" >

    <head>

        <meta charset="utf-8" />
        <title>الرئيسية</title>
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
                                <span class="logo-lg mt-5">
                                    <img src="{{asset('assets/images/white.png')}}" alt="" height="50">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

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

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" disabled
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="{{asset('assets/images/flags/libya.png')}}" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->


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
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"
                                ><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">تسجيل خروج</span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
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
                                    <li><a href="{{route('decisions.create')}}">إنــشــاء قــرار</a></li>
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
                                    <h4 class="mb-sm-0 font-size-18">الــرئــيــســيــة</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/images/users/user.png" alt="" class="avatar-md rounded-circle img-thumbnail">
                                                    </div>
                                                    <div class="flex-grow-1 align-self-center">
                                                        <div class="text-muted">
                                                            <p class="mb-2">مــرحــبا بــك</p>
                                                            <h5 class="mb-1 font-weight-bold">محمود محمد</h5>
                                                            <p class="mb-0">مـديــر شــؤون المـراقبــيــن</p>
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
                                                                <h5 class="mb-0">36</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2">الهــيـئـات</p>
                                                                <h5 class="mb-0">0</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div>
                                                                <p class="text-muted text-truncate mb-2">الــبــنــود</p>
                                                                <h5 class="mb-0">0</h5>

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
                                                        <li class="py-1">عدد الموظفين 0</li>
                                                        <li class="py-1">مراقبين ماليين 0</li>
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
                                                            <i class="bx bx-copy-alt"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-23 mb-0">المـرتـبـات الأساسـيـة</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4>0 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

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
                                                            <i class="bx bx-archive-in"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-23 mb-0">عـلاوة العـائـلة</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4> 0 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

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
                                                            <i class="bx bx-purchase-tag-alt"></i>
                                                        </span>
                                                    </div>
                                                    <h5 class="font-size-23 mb-0">عـلاوة الـسـكـن</h5>
                                                </div>
                                                <div class="text-muted mt-4">
                                                    <h4> 0 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>


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
                                                    <select class="form-select form-select-sm">
                                                        <option value="JA" selected>2022</option>
                                                        <option value="DE">2021</option>
                                                        <option value="NO">2020</option>
                                                        <option value="OC">2019</option>
                                                    </select>
                                                    <label class="input-group-text">year</label>
                                                </div>
                                            </div>
                                            <h4 class="card-title mb-4">إجـمـالـي الـمـصـروفـات</h4>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="text-muted">
                                                    <div class="mb-4">
                                                        <p>هـذه الـسـنـة</p>
                                                        <h4>$0</h4>
                                                        <div><span class="badge badge-soft-success font-size-12 me-1"> + 0.2% </span> عن السنة الماضية</div>
                                                    </div>


                                                    <div class="row">
                                                    <div class="mt-2 col-6">
                                                        <p class="mb-2">الباب الأول</p>
                                                        <h5>$0</h5>
                                                    </div>
                                                    <div class="mt-2 col-6">
                                                        <p class="mb-2">الباب الثاني</p>
                                                        <h5>$0</h5>
                                                    </div>
                                                    </div>
                                                    <div class="row">

                                                    <div class="mt-2 col-6">
                                                        <p class="mb-2">الباب الثالث</p>
                                                        <h5>$0</h5>
                                                    </div>
                                                    <div class="mt-2 col-6">
                                                        <p class="mb-2">الباب الرابع</p>
                                                        <h5>$0</h5>
                                                    </div>
                                                    <div class="mt-2">
                                                        <p class="mb-2">الباب الخامس</p>
                                                        <h5>$0</h5>
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
                                                        <h5>$ 0</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success me-1"></i> الباب 2</p>
                                                        <h5>$ 0</h5>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mt-4">
                                                        <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i> الباب 3</p>
                                                        <h5>$ 0</h5>
                                                    </div>
                                                </div>
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
                                                            <h5 class="mb-0">$0</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الــثــانـي</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>


                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">$0</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الـثـالـث</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>

                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">$0</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الــرابـع</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>

                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">$0</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1">الــبــاب الـخـامـس</h5>
                                                            <p class="text-muted mb-0">كــل الــبــنــود</p>
                                                        </td>

                                                        <td>
                                                            <p class="text-muted mb-1">دينار ليبي</p>
                                                            <h5 class="mb-0">$0</h5>
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


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> ©.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by Fahres
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
