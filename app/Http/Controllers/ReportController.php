<?php

namespace App\Http\Controllers;

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
      if($fuckingDetector == 0){
        if($items){
          $items2 = NULL;
          $items1 = Items::whereIn('id',$items)->get();
        }else{
          $items2 = NULL;
          $items1 = Items::where('door',$doors)->get();
        }
          $ministries2 = Ministrie::with('payeds')->where("parent_id",'=',$ministrie->id)->get();
          if(request('to')){
            if(request('from') < 10){
              $from = request('year').'-0'.request('from');
            }else{ $from = request('year').'-'.request('from'); }
            if(request('to' < 10)){
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
          $items1 = Items::where('door',$doors)->get();
        }
          $ministries2 = Ministrie::with('payeds')->where("parent_id",'=',$ministrie->id)->get();
          if(request('to')){
            if(request('from') < 10){
              $from = request('year').'-0'.request('from');
            }else{ $from = request('year').'-'.request('from'); }
            if(request('to' < 10)){
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
          if(request('to' < 10)){
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
            if(request('to' < 10)){
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
      return view('NewtaqarerSearch',compact('ministries','parentMinistry','ministries2','doors','ministrie','items','items1','items2','from','to','year','fromMonth','toMonth'));
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
    public function destroy($id)
    {
        //
    }
}
