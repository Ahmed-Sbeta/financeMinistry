<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>الـتـقاريـر</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/blue.png')}}">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />

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
                           <form action="{{route('searchReports')}}" method="get" class="pb-4">
                             @csrf
                               <div class="row">
                                   <div class="col-4 pb-2" lang="ar">
                                       <label for="">اســم الجــهــة</label>
                                       <select name="ministry" class="form-control js-example-basic-single" multiple="multiple" id="" lang="ar" required oninvalid="this.setCustomValidity('الرجاء اختيار جهة معينة')" oninput="this.setCustomValidity('')">
                                        <option value="0">الكل</option>
                                         @foreach($ministries as $ministry)
                                           <option value="{{$ministry->id}}">{{$ministry->name}}</option>
                                          @endforeach
                                       </select>
                                   </div>

                                   <div class="col-4">
                                     <label for="">الأبــواب</label>
                                       <select name="doors[]" class="form-control js-example-basic-multiple" multiple="multiple" id="" required oninvalid="this.setCustomValidity('الرجاء اختيار الابواب المطلوب البحث عنها')" oninput="this.setCustomValidity('')">
                                           <option value="1">الــبــاب الأول</option>
                                           <option value="2">الــبــاب الـثـانـي</option>
                                           <option value="3">الــبــاب الـثـالـث</option>
                                           <option value="4">الــبــاب الـرابـع</option>
                                           <option value="5">الــبــاب الـخـامـس</option>
                                       </select>
                                   </div>
                                   <div class="col-4">
                                     <label for="">الــبــنــود</label>
                                       <select name="items[]" class="form-control js-example-basic-multiple" multiple="multiple" id="">
                                           @foreach($items as $item)
                                           <option value="{{$item->id}}">{{$item->name}}</option>
                                           @endforeach
                                       </select>
                                   </div>

                                   <div class="col-4 ">
                                    <label for="to">الســنــة</label>
                                    <input type="number" min="1900" max="{{now()->format('Y')}}"  class="form-control" name="year" required oninvalid="this.setCustomValidity('الرجاء ادخال السنة')" oninput="this.setCustomValidity('')">
                                </div>
                                   <div class="col-4 pb-2">
                                    <label for="">مــن شــهــر</label>
                                    <input type="number" min="1" max="12" class="form-control" name="from" required oninvalid="this.setCustomValidity('الرجاء ادخال من الشهر المعين')" oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-4 ">
                                    <label for="to">الي شــهــر</label>
                                    <input type="number" min="1" max="12"  class="form-control" name="to" required oninvalid="this.setCustomValidity('الرجاء ادخال إلي الشهر المعين')" oninput="this.setCustomValidity('')">
                                </div>

                               </div>
                               <div class="d-flex flex-wrap gap-2 pt-4">
                                   <button type="submit" class="btn btn-primary waves-effect waves-light">مـــوافــق</button>
                               </div>
                                   </form>

                       <!-- end page title -->

                       <div class="row">
                           <div class="col-lg-12">
                               <div class="card">
                                   <div class="card-body">
                                       <div class="table-responsive">
                                           <table class="table align-middle table-nowrap table-hover">
                                               <thead class="table-light">
                                                   <tr>

                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <tr>

                                                   </tr>

                                               </tbody>
                                           </table>
                                       </div>

                                   </div>
                               </div>
                           </div>
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
                $('.js-example-basic-single').select2({
                  dir: "rtl",
                  maximumSelectionLength: 1 ,

                });
                $('.js-example-basic-multiple').select2();

                document.getElementById("rtl-mode-switch").trigger('click');
        });

    //     $(document).ready(function() {
    // $(document).on('submit', '#subme', function() {
	// 	name = document.getElementById("myInput").value;
	// 	if(name == ''){
	// 		name = 'all';
	// 		document.getElementById("paginate").style.display = "block";
	// 	}else{
	// 		name = name.replaceAll(' ', '_');
	// 		document.getElementById("paginate").style.display = "none";
	// 	}

    //     let url = "#";
	// 	url = url.replace(':id', name);
    //       $('.table-container').fadeOut();
    //       $('.table-container').load(url, function() {
    //           $('.table-container').fadeIn();
    //     });
    //     return false;
    //    });
    // });


        </script>
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script src="{{asset('assets\libs\select2\js\select2.full.min.js')}}" charset="utf-8"></script>

    </body>
</html>
