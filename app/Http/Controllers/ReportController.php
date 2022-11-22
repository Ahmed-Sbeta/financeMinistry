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
        $ministries = Ministrie::where("parent_id",'!=',NULL)->get();
        return view('taqarer',compact('ministries','items'));
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
      $ministries = Ministrie::where("parent_id",'!=',NULL)->get();
      $doors = request('doors');
      $items = request('items');
      $year = request('year');
      $fromMonth = request('from');
      if(request('to')){
        $toMonth = request('to');
      }else{
        $toMonth = '12';
      }
      if(request('ministry') == 0){
          $items2 = NULL;
          $ministries2 = Ministrie::where("parent_id",'!=',NULL)->get();
          if(request('to')){
            $from = request('year').'-'.request('from');
            $to = request('year').'-'.request('to');
          }else{
            $from = request('year').'-'.request('from');
            $to = request('year').'-'.'12';
          }
      }elseif(request('items')){
        $items2 = Items::whereIn('id', $items)->get();
        $ministries2 = NULL;
        if(request('to')){
          $from = request('year').'-'.request('from');
          $to = request('year').'-'.request('to');
        }else{
          $from = request('year').'-'.request('from');
          $to = request('year').'-'.'12';
        }
      }else{
          $items2 = Items::whereIn('door', $doors)->get();
          $ministries2 = NULL;
          if(request('to')){
            $from = request('year').'-'.request('from');
            $to = request('year').'-'.request('to');
          }else{
            $from = request('year').'-'.request('from');
            $to = request('year').'-'.'12';
          }
      }
      $fromMonth = (int)$fromMonth;
      $toMonth = (int)$toMonth;
      $items = Items::all();
      $ministrie = Ministrie::find(request('ministry'));
      return view('taqarerSearch',compact('ministries','ministries2','doors','ministrie','items','items2','from','to','year','fromMonth','toMonth'));
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
