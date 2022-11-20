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
      $allitems = Items::all();
      $allministries = Ministrie::where("parent_id",'!=',NULL)->get();
      $ministry = request('ministry');
      $from = request('from').'-01';
      $To = request('to').'-01';
      $doors = request('doors');
      $items = request('items');

      for($i=0 ; $i<count($doors) ; $i++){
        if($i==0){
          $titleList = Items::where('door','=',$doors[$i])->get();
        }
        else {
          $titleList = $titleList->merge(Items::where('door','=',$doors[$i])->get());
        }
      }

      $toDate = Carbon::parse($To);
      $fromDate = Carbon::parse($from);
      $monthes = $toDate->diffInMonths($fromDate);

      $mFrom = $fromDate->format('m');
      $mTo = $toDate->format('m');
      $mFrom = ltrim($mFrom, '0');



      $pay = MonthllyPayed::where('ministry_id','=',$ministry)->whereBetween('date', [$fromDate, $toDate])->get();

      $ministrie = Ministrie::find($ministry)->first();
      return view('taqarerSearch',compact('titleList','allitems','allministries','pay','mFrom','mTo'));
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
