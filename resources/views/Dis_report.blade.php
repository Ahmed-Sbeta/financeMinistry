<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        <title>قرارات</title>
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
                        <form action="{{route('DecisionsReports')}}" method="get" class="pb-4">
                             @csrf
                               <div class="row">
                               <div class="col-4 ">
                                    <label for="to">رقم القرار</label>
                                    <input type="text" class="form-control" name="Dis_number" oninvalid="this.setCustomValidity('الرجاء ادخال رقم القرار ')" oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-4 ">
                                    <label for="to">عنوان القرار</label>
                                    <input type="text" class="form-control" name="Dis_title" oninvalid="this.setCustomValidity('الرجاء ادخال عنوان القرار ')" oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-4 ">
                                    <label for="to">نتائج اللجنة</label>
                                    <input type="text" class="form-control" name="Dis_res" oninvalid="this.setCustomValidity('الرجاء ادخال نتائج اللجنه ')" oninput="this.setCustomValidity('')">
                                </div>
                                   <div class="col-4 ">
                                    <label for="to">الســنــة</label>
                                    <input type="number" min="1900" value="2023"  class="form-control" name="year" oninvalid="this.setCustomValidity('الرجاء ادخال السنه ')" oninput="this.setCustomValidity('')">
                                </div>
                                   <div class="col-4 pb-2">
                                    <label for="">مــن شــهــر</label>
                                    <input type="number" min="1" max="12" value="1" class="form-control" name="from" oninvalid="this.setCustomValidity('الرجاء ادخال من الشعر المعين')" oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-4 ">
                                    <label for="to">الي شــهــر</label>
                                    <input type="number" min="1" max="12" value="12" class="form-control" name="to" oninvalid="this.setCustomValidity('الرجاء ادخال إلي الشهر المعين')" oninput="this.setCustomValidity('')">
                                </div>

                               </div>
                               <div class="d-flex flex-wrap gap-2 pt-4">
                                   <button type="submit" class="btn btn-primary waves-effect waves-light">مـــوافــق</button>
                               </div>
                                   </form>

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"> تقرير القــرارات</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-end">    
                                        <a href="#" onclick="exportData('xlsx',{{json_encode('كل القرارا ت ')}})" type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-file me-1"></i> تــصديــر</a>
                                        </div>
                                        <div class="row mb-2">                            
                                            @include('includes.messages')
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap table-check" id="tab1">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th style="width: 20px;" class="align-middle">

                                                        </th>
                                                        <th class="align-middle">رقـم الـقـرار</th>
                                                        <th class="align-middle">عـنـوان الـقـرار</th>
                                                        <th class="align-middle">تــاريــخ الــقــرار</th>
                                                        <th class="align-middle">جــهـة صــادرة</th>
                                                        <th class="align-middle">جــهـة مـسـتـلـمـة</th>
                                                        <th class="align-middle">نتائج اللجنة </th>
                                                        <th class="align-middle">مــلــف</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @isset($decisions)
                                                  @foreach($decisions as $decision)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">

                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold">{{$decision->decisionsNumber}}</a> </td>
                                                        <td>{{$decision->title}}</td>
                                                        <td>
                                                            {{$decision->date}}
                                                        </td>
                                                        <td>
                                                            {{$decision->issuer1->name}}
                                                        </td>
                                                        
                                                        <td>
                                                            {{$decision->receiver}}
                                                        </td>
                                                        <td>
                                                            {{$decision->results}}
                                                        </td>
                                                        <td>
                                                            <!-- Button trigger modal -->
                                                            <a href="{{route('downloadFile',['id'=>$decision->id])}}" type="button" class="btn btn-primary btn-sm btn-rounded">
                                                              تــحــمــيــل مــلــف
                                                            </a>
                                                        </td>
                                                        
                                                    </tr>
                                                    @endforeach
                                                    @endisset

                                                </tbody>
                                            </table>
                                        </div>
                                        <ul class="pagination pagination-rounded justify-content-center mb-2">
                                            @isset($decisions)
                                            {{ $decisions->links('pagination::bootstrap-4') }}
                                            @endisset
                                        </ul>
                                    </div>
                                </div>
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

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

        <script>
    function exportData(type,name)
    {
      var data = document.getElementById('tab1');
      var file = XLSX.utils.table_to_book(data, {sheet: "المنتجات"});
      XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });
      XLSX.writeFile(file, name+'.'+ type);
    }
</script>
    </body>
</html>
