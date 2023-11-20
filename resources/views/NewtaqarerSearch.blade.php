<!doctype html>
<html lang="en" dir="rtl">

    <head>

        <meta charset="utf-8" />
        @if($ministrie)
        <title>تقارير للجهة {{$ministrie->name}}</title>
        @else
        <title>تقارير لكل الجهات</title>
        @endif
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
      <script type="text/javascript">
       function Ddselect(){

         var main = document.getElementById('Main');
         var Sub = document.getElementById('Sub');

         var child = Sub.lastElementChild;
            while (child) {
          Sub.removeChild(child);
          child = Sub.lastElementChild;
        }
         @foreach($ministries as $ministry)
           if({!! json_encode($ministry->parent_id) !!} == main.value){
             var newOption = document.createElement("OPTION");
             newOption.text = ({!! json_encode($ministry->name) !!});
             newOption.value = ({!! json_encode($ministry->id) !!});
             Sub.insertBefore(newOption,Sub.lastChild);
           }
         @endforeach
       }

       function Ddselect2(){

         var main = document.getElementById('Sub');
         var Sub = document.getElementById('Sub2');

         var child = Sub.lastElementChild;
            while (child) {
          Sub.removeChild(child);
          child = Sub.lastElementChild;
        }
         @foreach($ministries as $ministry)
           if({!! json_encode($ministry->parent_id) !!} == main.value){
             var newOption = document.createElement("OPTION");
             newOption.text = ({!! json_encode($ministry->name) !!});
             newOption.value = ({!! json_encode($ministry->id) !!});
             Sub.insertBefore(newOption,Sub.lastChild);
           }
         @endforeach
       }

      </script>


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
                <?php ini_set('max_execution_time', 300); 
                      ini_set('memory_limit', '1024M');?>

              <div class="page-content">
                   <div class="container-fluid">

                       <!-- start page title -->
                           <form action="{{route('searchReports')}}" method="get" class="pb-4">
                             @csrf
                               <div class="row">
                                   <div class="col-4 pb-2" lang="ar">
                                       <label for="">اســم الجــهــة</label>
                                       <select name="ministry" id="Main" onchange="Ddselect();" class="form-control js-example-basic-single" multiple="multiple" id="" lang="ar" required oninvalid="this.setCustomValidity('الرجاء اختيار جهة معينة')" oninput="this.setCustomValidity('')">
                                         <option value="0">الكل</option>
                                         @foreach($ministries as $ministry)
                                          @if($ministry->parent_id == NULL)
                                           <option value="{{$ministry->id}}">{{$ministry->name}}</option>
                                           @endif
                                          @endforeach
                                       </select>
                                   </div>
                                   <div class="col-4 pb-2" lang="ar">
                                       <label for="">الجــهــة الفــرعــيــة </label>
                                       <select name="sub-ministry" id="Sub" onchange="Ddselect2();" class="form-control js-example-basic-single" multiple="multiple" lang="ar"  oninvalid="this.setCustomValidity('الرجاء اختيار جهة معينة')" oninput="this.setCustomValidity('')">
                                       </select>
                                   </div>

                                   <div class="col-4 pb-2" lang="ar">
                                       <label for=""> جــهــة فــرعــية أخـــري </label>
                                       <select name="sub-ministry2" id="Sub2" class="form-control js-example-basic-single" multiple="multiple" lang="ar"  oninvalid="this.setCustomValidity('الرجاء اختيار جهة معينة')" oninput="this.setCustomValidity('')">
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
                                </div>

                                   <div class="col-4 ">
                                    <label for="to">الســنــة</label>
                                    <input type="number" min="1900" value="{{$year}}" max="{{now()->format('Y')}}"  class="form-control" name="year" required oninvalid="this.setCustomValidity('الرجاء ادخال السنة ')" oninput="this.setCustomValidity('')">
                                </div>
                                   <div class="col-4 pb-2">
                                    <label for="">مــن شــهــر</label>
                                    <input type="number" min="1" max="12" value="{{$fromMonth}}" class="form-control" name="from" required oninvalid="this.setCustomValidity('الرجاء ادخال من الشعر المعين')" oninput="this.setCustomValidity('')">
                                </div>
                                <div class="col-4 ">
                                    <label for="to">الي شــهــر</label>
                                    <input type="number" min="1" max="12" value="{{$toMonth}}" class="form-control" name="to" required oninvalid="this.setCustomValidity('الرجاء ادخال إلي الشهر المعين')" oninput="this.setCustomValidity('')">
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

                                    <div class="row mb-2">
                                        <div class="col-4">
                                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                @if($ministrie)
                                                <h4 class="mb-sm-0 font-size-18"> <span>{{$parentMinistry}} / {{$ministrie->name}} </span> </h4>
                                                @else
                                                <h4 class="mb-sm-0 font-size-18"> <span>كل الجهات</span> </h4>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-sm-end">
                                                <h4 class="mb-sm-0 font-size-18">من الشهر {{$from}} الي الشهر {{$to}}</h4>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="text-sm-end">
                                                @if($ministrie)
                                                <a href="#" onclick="exportData('xlsx',{{json_encode($parentMinistry.'_'.$ministrie->name.' '.$from.' إلي '.$to)}})" type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-file me-1"></i> تــصديــر</a>
                                                @else
                                                <a href="#" onclick="exportData('xlsx',{{json_encode('كل الجهات '.$from.' إلي '.$to)}})" type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-file me-1"></i> تــصديــر</a>
                                                @endif
                                            </div>
                                        </div>

                                        @include('includes.messages')

                                    </div>

                                        <div class="table-responsive">
                                           <table class="table align-middle table-nowrap table-hover"  id="tab1">
                                               <thead class="table-light">
                                                   <tr>
                                                    <th width="70px">البند</th>

                                                    @if($items2)
                                                    @for($i = $fromMonth; $i <= $toMonth; $i++)
                                                      <th> {{$i}}</th>
                                                      <?php   $sum[$i] = 0 ;
                                                              $sum1 = NULL;?>
                                                    @endfor
                                                    @else
                                                    @foreach($items1 as $item)
                                                    <th> {{$item->name}}</th>
                                                    <?php   $sum1[$item->id] = 0;
                                                            $sum = NULL;?>
                                                    @endforeach

                                                    @endif
                                                    <th>المجموع </th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                @if($items2)
                                                    @foreach ($items2 as $item)
                                                       <tr>
                                                        <td>{{$item->name}}</td>
                                                        <?php $SumH = array();
                                                        ?>
                                                        @for($i = $fromMonth; $i <= $toMonth; $i++)
                                                            @if($i < 10)
                                                                @if($item->payeds->where('date', $year.'-0'.$i.'-'.'01')->where('ministry_id',$ministrie->id)->count() > 0)
                                                                    <td>{{number_format($item->payeds->where('date', $year.'-0'.$i.'-'.'01')->where('ministry_id',$ministrie->id)->first()->total)}}</td>
                                                                      <?php array_push($SumH, $item->payeds->where('date', $year.'-0'.$i.'-'.'01')->where('ministry_id',$ministrie->id)->first()->total); ?>
                                                                      <?php $sum[$i] += $item->payeds->where('date', $year.'-0'.$i.'-'.'01')->where('ministry_id',$ministrie->id)->first()->total; ?>

                                                                    <!-- <td>المصروفات <span style="color: green;">{{$item->payeds->where('ministry_id',$ministrie->id)->where('date', $year.'-0'.$i.'-'.'01')->first()->total}}</span> - المعطيات <span style="color: green;">{{$item->payeds->where('date', $year.'-0'.$i.'-'.'01')->first()->given}}</span> </td> -->
                                                                @else
                                                                    <td>x</td>
                                                                @endif
                                                            @else

                                                                @if($item->payeds->where('date', $year.'-'.$i.'-'.'01')->where('ministry_id',$ministrie->id)->count() > 0)
                                                                    <td>{{number_format($item->payeds->where('date', $year.'-'.$i.'-'.'01')->where('ministry_id',$ministrie->id)->first()->total)}} </td>

                                                                    <?php array_push($SumH,$item->payeds->where('date', $year.'-'.$i.'-'.'01')->where('ministry_id',$ministrie->id)->first()->total); ?>
                                                                    <?php $sum[$i] += $item->payeds->where('date', $year.'-'.$i.'-'.'01')->where('ministry_id',$ministrie->id)->first()->total ?>

                                                                @else
                                                                    <td>x</td>
                                                                @endif
                                                            @endif
                                                        @endfor
                                                        <td>{{ number_format(array_sum ( $SumH ))}}</td>
                                                      </tr>
                                                    @endforeach


                                                @elseif($ministrie == NULL)
                                                  @foreach($ministries2 as $item)
                                                      <tr>
                                                        <td>{{$item->name}} والجهات التابعة لها </td>
                                                        <?php $SumH = array();
                                                        ?>
                                                        <?php $x=0; ?>
                                                        <?php $y = $Allministries->where('parent_id',$item->id); ?>
                                                        @foreach($items1 as $i)
                                                        @foreach($y as $r)
                                                        @if($ministries->where('parent_id',$r->id)->count() > 0)
                                                              <?php $sub = $ministries->where('parent_id',$r->id);
                                                                      $subsum = 0 ;
                                                                      ?>
                                                              @foreach($sub as $s)
                                                              <?php $subsum += $s->payeds->whereBetween('date', [$from.'-01',$to.'-01'])->whereIn('item_id', $i->id)->where('ministry_id',$s->id)->sum('total'); ?>
                                                              @endforeach
                                                              <?php $x = $x + $subsum; ?>
                                                        @else
                                                        <?php $x = $x + $r->payeds->whereBetween('date', [$from.'-01',$to.'-01'])->whereIn('item_id', $i->id)->sum('total'); ?>
                                                        @endif
                                                        @endforeach
                                                            @if($x > 0)
                                                                <td>{{number_format($x)}}</td>
                                                                <?php array_push($SumH,$x); ?>
                                                                <?php $sum1[$i->id] += $x ?>

                                                                <?php $x=0; ?>
                                                                @else
                                                                <td>x</td>
                                                                @endif
                                                                @endforeach
                                                                <td>{{ number_format(array_sum ( $SumH ))}}</td>
                                                              </tr>
                                                              @endforeach
                                                  @else
                                                    @foreach ($ministries2 as $item)
                                                        <tr>
                                                        <td>{{$item->name}}</td>
                                                        <?php $SumH = array();
                                                        ?>
                                                        @foreach($items1 as $i)
                                                        @if($ministries->where('parent_id',$item->id)->count() > 0)
                                                              <?php $sub = $ministries->where('parent_id',$item->id);
                                                                      $subsum = 0 ;
                                                                      ?>
                                                              @foreach($sub as $s)
                                                              <?php $subsum += $s->payeds->whereBetween('date', [$from.'-01',$to.'-01'])->whereIn('item_id', $i->id)->where('ministry_id',$s->id)->sum('total'); ?>
                                                              @endforeach
                                                              <td>{{number_format($subsum)}}</td>
                                                              <?php array_push($SumH,$subsum); ?>
                                                              <?php $sum1[$i->id] += $subsum ; ?>

                                                        @else
                                                               @if($item->payeds->whereBetween('date', [$from.'-01',$to.'-01'])->whereIn('item_id', $i->id)->count() > 0)
                                                                     <td>{{number_format($item->payeds->whereBetween('date', [$from.'-01',$to.'-01'])->whereIn('item_id', $i->id)->where('ministry_id',$item->id)->sum('total'))}}</td>
                                                                     <?php array_push($SumH,$item->payeds->whereBetween('date', [$from.'-01',$to.'-01'])->whereIn('item_id', $i->id)->where('ministry_id',$item->id)->sum('total')); ?>
                                                                     <?php $sum1[$i->id] += $item->payeds->whereBetween('date', [$from.'-01',$to.'-01'])->whereIn('item_id', $i->id)->where('ministry_id',$item->id)->sum('total') ; ?>
                                                               @else
                                                                   <td>x</td>
                                                               @endif
                                                        @endif
                                                        @endforeach
                                                        <td>{{ number_format(array_sum ( $SumH ))}}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                @if($sum)
                                                <tr>
                                                    <td>المجموع</td>
                                                    @for($i = $fromMonth; $i <= $toMonth; $i++)
                                                        <td>{{number_format($sum[$i])}} </td>
                                                    @endfor


                                                   </tr>
                                                   @endif

                                                   @if($sum1)
                                                   <tr>
                                                     <td>المجموع</td>
                                                   @foreach($items1 as $item)
                                                   <td> {{number_format($sum1[$item->id])}}</td>
                                                   @endforeach
                                                 </tr>
                                                   @endif
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
        <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

<script>
    function exportData(type,name)
    {
      var data = document.getElementById('tab1');
      var file = XLSX.utils.table_to_book(data, {sheet: "المنتجات"});
      XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });
      XLSX.writeFile(file, name+'.' + type);
    }
</script>
    </body>
</html>