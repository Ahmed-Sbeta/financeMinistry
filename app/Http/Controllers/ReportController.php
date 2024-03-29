<?php

namespace App\Http\Controllers;

use App\Models\Decisions;
use Illuminate\Http\Request;
use App\Models\Ministrie;
use App\Models\Items;
use App\Models\MonthllyPayed;
use Carbon\Carbon;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Items::all();
        $ministries = Ministrie::all();
        return view('Newtaqarer',compact('ministries','items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(request('from') > request('to')){
        return redirect()->back()->with('error','لا يمكن ان تكون من شهر اكبر من الي شهر');
      }
      $fuckingDetector =0;
      $ministries = Ministrie::all();
      $doors = request('doors');
      $items = request('items');
      $year = request('year');
      $fromMonth = request('from');
      $parentMinistry = NULL;
      $Allministries = NULL;
      if(request('sub-ministry2')){
        $ministrie = Ministrie::find(request('sub-ministry2'));
        $fuckingDetector = 2 ;
        $parentMinistry = Ministrie::find(request('sub-ministry'))->name;
      }elseif (request('sub-ministry')){
        $ministrie = Ministrie::find(request('sub-ministry'));
        $fuckingDetector = 1 ;
        $parentMinistry = Ministrie::find(request('ministry'))->name;
      }else{
        $ministrie = Ministrie::find(request('ministry'));
      }

      if(request('to')){
        $toMonth = request('to');
      }else{
        $toMonth = '12';
      }
      if($fuckingDetector == 0 && request('ministry') != 0){
        if($items){
          $items2 = NULL;
          $items1 = Items::whereIn('id',$items)->get();
        }else{
          $items2 = NULL;
          $items1 = Items::whereIn('door',$doors)->get();
        }
          $ministries2 = Ministrie::with('payeds')->where("parent_id",'=',$ministrie->id)->get();
          if(request('to')){
            if(request('from') < 10){
              $from = request('year').'-0'.request('from');
            }else{ $from = request('year').'-'.request('from'); }
            if(request('to') < 10 ){
              $to = request('year').'-0'.request('to');
            }else{
              $to = request('year').'-'.request('to');
            }
          }else{
            if(request('from') < 10){
              $from = request('year').'-0'.request('from');
            }else{ $from = request('year').'-'.request('from'); }
            $to = request('year').'-'.'12';
          }
      }elseif ($fuckingDetector == 0 && request('ministry') == 0) {
          if($items){
            $items2 = NULL;
            $items1 = Items::whereIn('id',$items)->get();
          }else{
            $items2 = NULL;
            $items1 = Items::whereIn('door',$doors)->get();
          }
            $ministries2 = Ministrie::where("parent_id",'=',NULL)->get();
            $Allministries = Ministrie::with('payeds')->where("parent_id",'!=',NULL)->get();

            if(request('to')){
              if(request('from') < 10){
                $from = request('year').'-0'.request('from');
              }else{ $from = request('year').'-'.request('from'); }
              if(request('to') < 10){
                $to = request('year').'-0'.request('to');
              }else{
                $to = request('year').'-'.request('to');
              }
            }else{
              if(request('from') < 10){
                $from = request('year').'-0'.request('from');
              }else{ $from = request('year').'-'.request('from'); }
              $to = request('year').'-'.'12';
            }
      }elseif ($fuckingDetector == 1 && Ministrie::where("parent_id",'=',$ministrie->id)->count() > 0) {
        if($items){
          $items2 = NULL;
          $items1 = Items::whereIn('id',$items)->get();
        }else{
          $items2 = NULL;
          $items1 = Items::whereIn('door',$doors)->get();
        }
          $ministries2 = Ministrie::with('payeds')->where("parent_id",'=',$ministrie->id)->get();
          if(request('to')){
            if(request('from') < 10){
              $from = request('year').'-0'.request('from');
            }else{ $from = request('year').'-'.request('from'); }
            if(request('to') < 10){
              $to = request('year').'-0'.request('to');
            }else{
              $to = request('year').'-'.request('to');
            }
          }else{
            if(request('from') < 10){
              $from = request('year').'-0'.request('from');
            }else{ $from = request('year').'-'.request('from'); }
            $to = request('year').'-'.'12';
          }
      }elseif(request('items')){
        $items1 = Null;
        $items2 = Items::with('payeds')->whereIn('id', $items)->get();
        $ministries2 = NULL;
        if(request('to')){
          if(request('from') < 10){
            $from = request('year').'-0'.request('from');
          }else{ $from = request('year').'-'.request('from'); }
          if(request('to') < 10){
            $to = request('year').'-0'.request('to');
          }else{
            $to = request('year').'-'.request('to');
          }
        }else{
          if(request('from') < 10){
            $from = request('year').'-0'.request('from');
          }else{ $from = request('year').'-'.request('from'); }
          $to = request('year').'-'.'12';
        }
      }else{
          $items1 = NULL;
          $items2 = Items::with('payeds')->whereIn('door', $doors)->get();
          $ministries2 = NULL;
          if(request('to')){
            if(request('from') < 10){
              $from = request('year').'-0'.request('from');
            }else{ $from = request('year').'-'.request('from'); }
            if(request('to') < 10){
              $to = request('year').'-0'.request('to');
            }else{
              $to = request('year').'-'.request('to');
            }
          }else{
            if(request('from') < 10){
              $from = request('year').'-0'.request('from');
            }else{ $from = request('year').'-'.request('from'); }
            $to = request('year').'-'.'12';
          }
      }
      $fromMonth = (int)$fromMonth;
      $toMonth = (int)$toMonth;
      $items = Items::all();
      $x=0;
      $subsum =0 ;
      // dd(Ministrie::with('payeds')->where('parent_id',1)->whereHas('payeds', function ($query) use ($from , $to) {
      //     return $query->whereBetween('date', [$from.'-01',$to.'-01'])->whereIn('item_id', [1,2,3]);
      //   })->count());

      // foreach ($ministries2 as $item) {
      //   foreach($items1 as $i){
      //
      //     $y = $Allministries->where('parent_id',$item->id);
      //     // dd($y);
      //     foreach ($y as $r) {
      //       $x = $x + $r->payeds->whereBetween('date', [$from.'-01',$to.'-01'])->where('item_id', $i->id)->sum('total');
      //     }
      //     // dd($x);
      //   }
      // }

      return view('NewtaqarerSearch',compact('ministries','Allministries','parentMinistry','ministries2','doors','ministrie','items','items1','items2','from','to','year','fromMonth','toMonth'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function DecisionsReports()
    {
        $number = request('Dis_number');
        $title = request('Dis_title');
        $resault = request('Dis_res');
        $year = request('year');
        $from = request('from');
        $to = request('to');
        

        $decisions= Decisions::where('created_at', '>=', $year.'-01-01 00:00:00')
        ->where('created_at', '<=', $year.'-12-31 23:59:59')
        ->where(function($query) {
            $query->where('decisionsNumber', 'like', '%'.request('Dis_number').'%')
                  ->Where('title', 'like', '%'.request('Dis_title').'%');
        })
        ->paginate(20);
        return view('Dis_report',compact('decisions'));
    }


    public function givenVSspent(){
      
        $year =  now()->format('Y');
      
      $ministries = Ministrie::with('payeds')->where('parent_id','!=',NULL)->get();

      return view('welcome',compact('ministries','year'));
    }

    public function searchspentvsgiven(){
      $ministries = Ministrie::with('payeds')->where('parent_id','!=',NULL)->where('name', 'LIKE', '%' . request('name') . '%')->get();

      if(request('year')){
        $year = request('year');
      }else{
        $year =  now()->format('Y');
      }
      return view('welcome',compact('ministries','payeds','year'));
    }

    public function moreDetails($id){
      $ministry = Ministrie::with('payeds')->find($id);
      $year = now();
      return view('more_details_report',compact('ministry','year'));
    }
}

