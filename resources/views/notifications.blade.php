<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>كل الاشعارات</title>
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
                                    <h4 class="mb-sm-0 font-size-18">كــل الإشــعــارات</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        @include('includes.messages')

                        <div class="row">
                            @foreach ($notifications as $notif)
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-4">
                                                <div class="avatar-md">
                                                    <span class="avatar-title rounded-circle bg-light text-danger font-size-16">
                                                        <img src="assets/images/blue.png" alt="" height="70">
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="flex-grow-1 overflow-hidden">
                                                <h5 class="font-size-15"><a class="text-dark">{{$notif->title}}</a></h5>
                                                <p class="text-muted mb-4">{{$notif->desc}}</p>
                                            </div>

                                            @if(auth()->user()->role_id == 1)
                                             <form method="POST" action="{{route('notifications.destroy',[$notif->num])}}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="text-danger" style="border: none; background: none;"><i class="mdi mdi-delete font-size-18"></i></button>
                                            </form>
                                            @endif

                                        </div>
                                    </div>
                                    <div class="px-4 py-3 border-top">
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-3">
                                                @if($notif->priority == 1)
                                                    <span class="badge bg-danger" style="font-size: 130% ;">ضــعــيــف</span>
                                                @elseif($notif->priority == 2)
                                                    <span class="badge bg-warning" style="font-size: 130% ;">مــتــوســط</span>
                                                @else
                                                    <span class="badge bg-success" style="font-size: 130% ;">مـــهــــم</span>
                                                @endif
                                            </li>
                                            <li class="list-inline-item me-3">
                                                <i class= "bx bx-calendar me-1"></i> {{$notif->created_at->format('Y-m-d')}}
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pagination pagination-rounded justify-content-center mb-2">
                                    {{ $notifications->links('pagination::bootstrap-4') }}
                                </ul>
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

        <script src="{{asset('assets/js/app.js')}}"></script>

    </body>
</html>
