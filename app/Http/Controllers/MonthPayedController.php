<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Ministrie;
use App\Models\MonthllyPayed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonthPayedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $date = request('date');
        $ministry = Ministrie::find(request('id'));
        $items = Items::get();
        $payeds = MonthllyPayed::where('ministry_id', request('id'))->whereDate('date', request('date').'-1')->get();
        $sum1[0] = 0;
        $sum1[1] = 0;
        $sum2[0] = 0;
        $sum2[1] = 0;
        $sum3[0] = 0;
        $sum3[1] = 0;
        $sum4[0] = 0;
        $sum4[1] = 0;
        $sum5[0] = 0;
        $sum5[1] = 0;
        foreach ($items->where('door', 1) as $item){
          if($payeds->where('item_id', $item->id)->first()){
            $sum1[0] += $payeds->where('item_id', $item->id)->first()->total;
            $sum1[1] += $payeds->where('item_id', $item->id)->first()->given;
          }
        }
        foreach ($items->where('door', 2) as $item){
          if($payeds->where('item_id', $item->id)->first()){
            $sum2[0] += $payeds->where('item_id', $item->id)->first()->total;
            $sum2[1] += $payeds->where('item_id', $item->id)->first()->given;
          }
        }
        foreach ($items->where('door', 3) as $item){
          if($payeds->where('item_id', $item->id)->first()){
            $sum3[0] += $payeds->where('item_id', $item->id)->first()->total;
            $sum3[1] += $payeds->where('item_id', $item->id)->first()->given;
          }
        }
        foreach ($items->where('door', 4) as $item){
          if($payeds->where('item_id', $item->id)->first()){
            $sum4[0] += $payeds->where('item_id', $item->id)->first()->total;
            $sum4[1] += $payeds->where('item_id', $item->id)->first()->given;
          }
        }
        foreach ($items->where('door', 5) as $item){
          if($payeds->where('item_id', $item->id)->first()){
            $sum5[0] += $payeds->where('item_id', $item->id)->first()->total;
            $sum5[1] += $payeds->where('item_id', $item->id)->first()->given;
          }
        }
        return view('add-month-pay',compact('ministry','payeds','date','items','sum1','sum2','sum3','sum4','sum5'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        request()->validate(
            [
                'item_id'  => "required|array|min:1",
                'date' => 'required',
            ],
            [
                'item_name.required' => 'الرجاء اضافة بعض الخانات علي الاقل',
                'item_name.min' => 'الرجاء اضافة بعض الخانات علي الاقل',
                'date.required' => 'يجب تحديد التاريخ',
            ]);

            DB::beginTransaction();
        try {
             $finalArray = array();
            $items = request('item_id');
            $itemP = request('price');
            $itemP2 = request('price2');
            $itemd = request('door_id');
            $counter = 0;
            $counter2 = 0;
            $date = request('date');
            for ($i=0; $i < count($items); $i++) {
                // if(!array_key_exists($i, $itemP)){
                //   $itemP[$i] = "0";
                //   array_push($itemP, 0);
                // }
                // if(!array_key_exists($i, $itemP2)){
                //   $itemP2[$i] = "0";
                // }
                if($itemP[$i]!=Null || $itemP2[$i]!=Null){
                    $found = MonthllyPayed::where([['ministry_id', $id],['item_id', $items[$i]]])->whereDate('date', request('date').'-1')->first();
                    // if(!$itemP[$i]){
                    //   $itemP[$i] = 0;
                    // }
                    // if(!$itemP2[$i]){
                    //   $itemP2[$i] = 0;
                    // }

                    if(!$found){
                        array_push($finalArray, array(
                            'ministry_id'=>$id,
                            'item_id'=>$items[$i],
                            'door_id'=>$itemd[$i],
                            'total'=>$itemP[$i],
                            'given'=>$itemP2[$i],
                            'date'=>request('date').'-1',
                            'created_id'=> auth()->user()->id
                            )
                        );
                        $counter2++;
                    }else{
                        if($itemP[$i]!=Null){
                          $found->total = $itemP[$i];
                        }
                        if($itemP2[$i]!=Null){
                          $found->given = $itemP2[$i];
                        }
                        $found->update();
                        $counter++;
                    }
                }
            }


            if(count($finalArray) > 0){
              MonthllyPayed::insert($finalArray);
            }

            DB::commit();
            if($counter > 0 && $counter2 > 0){
                return redirect()->route('monthPayeds.backTo',['date'=>request('date'),'id'=>$id,'num'=>1])->with('success','تمت اضافة بعض المدخلات الشهرية بنجاح والبعض من المدخلات موجودة مسبقآ');
            }elseif($counter > 0 || $counter2 > 0){
                return redirect()->route('monthPayeds.backTo',['date'=>request('date'),'id'=>$id,'num'=>2])->with('success','تمت اضافة كل المدخلات الشهرية بنجاح');
            }else{
                return redirect()->route('monthPayeds.backTo',['date'=>request('date'),'id'=>$id,'num'=>3])->with('success','تمت اضافة كل المدخلات الشهرية بنجاح');
            }
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error','للاسف حدث خطأ ما الرجاء اعادة المحاولة');
        }
    }


    public function backTo($date, $id,$num)
    {
        $date = request('date');
        $ministry = Ministrie::find(request('id'));
        $items = Items::get();
        $payeds = MonthllyPayed::where('ministry_id', request('id'))->whereDate('date', request('date').'-1')->get();
        $sum1[0] = 0;
        $sum1[1] = 0;
        $sum2[0] = 0;
        $sum2[1] = 0;
        $sum3[0] = 0;
        $sum3[1] = 0;
        $sum4[0] = 0;
        $sum4[1] = 0;
        $sum5[0] = 0;
        $sum5[1] = 0;
        foreach ($items->where('door', 1) as $item){
          if($payeds->where('item_id', $item->id)->first()){
            $sum1[0] += $payeds->where('item_id', $item->id)->first()->total;
            $sum1[1] += $payeds->where('item_id', $item->id)->first()->given;          }
        }
        foreach ($items->where('door', 2) as $item){
          if($payeds->where('item_id', $item->id)->first()){
            $sum2[0] += $payeds->where('item_id', $item->id)->first()->total;
            $sum2[1] += $payeds->where('item_id', $item->id)->first()->given;          }
        }
        foreach ($items->where('door', 3) as $item){
          if($payeds->where('item_id', $item->id)->first()){
            $sum3[0] += $payeds->where('item_id', $item->id)->first()->total;
            $sum3[1] += $payeds->where('item_id', $item->id)->first()->given;          }
        }
        foreach ($items->where('door', 4) as $item){
          if($payeds->where('item_id', $item->id)->first()){
            $sum4[0] += $payeds->where('item_id', $item->id)->first()->total;
            $sum4[1] += $payeds->where('item_id', $item->id)->first()->given;          }
        }
        foreach ($items->where('door', 5) as $item){
          if($payeds->where('item_id', $item->id)->first()){
            $sum5[0] += $payeds->where('item_id', $item->id)->first()->total;
            $sum5[1] += $payeds->where('item_id', $item->id)->first()->given;          }
        }

        return view('add-month-pay',['ministry'=>$ministry, 'payeds'=>$payeds, 'date'=>$date, 'items'=>$items , 'sum1'=>$sum1,'sum2'=>$sum2,'sum3'=>$sum3,'sum4'=>$sum4,'sum5'=>$sum5]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ministry = Ministrie::find($id);
        $year = now();
        return view('ministry-Details',compact('ministry','year'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $date = request('date');
        $ministry = Ministrie::find($id);
        $items = Items::get();
        $payeds = MonthllyPayed::where('ministry_id', $id)->whereDate('date', request('date').'-1')->get();
        return view('ministry-Details2',compact('ministry','payeds','date','items'));
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
        if(auth()->user()->role_id != 1){
            return redirect()->route('home')->with('error','عذرآ غير مسموح لك بالتواجد في هذه الصفحة');
        }
        request()->validate(
            [
                'item_id'  => "required|array|min:1",
                'price'  => "required|array|min:1",
                'date' => 'required',
            ],
            [
                'item_name.required' => 'الرجاء اضافة بعض الخانات علي الاقل',
                'item_name.min' => 'الرجاء اضافة بعض الخانات علي الاقل',
                'price.required' => 'الرجاء اضافة بعض الخانات علي الاقل',
                'price.min' => 'الرجاء اضافة بعض الخانات علي الاقل',
                'date.required' => 'يجب تحديد التاريخ',
            ]);

            DB::beginTransaction();
        try {

            MonthllyPayed::where('ministry_id', $id)->whereDate('date', request('date').'-1')->delete();
            $finalArray = array();
            $items = request('item_id');
            $itemP = request('price');
            $itemP1 = request('price1');
            $itemd = request('door_id');
            $counter = 0;
            $counter2 = 0;
            $date = request('date').'-1';
            for ($i=0; $i < count($items); $i++) {
                if($itemP[$i] != NULL && $itemP1 !=NULL){
                    $found = MonthllyPayed::where(([['ministry_id', $id],['item_id', $items[$i]]]))->whereDate('date', $date)->first();
                    if(!$found){
                        array_push($finalArray, array(
                            'ministry_id'=>$id,
                            'item_id'=>$items[$i],
                            'door_id'=>$itemd[$i],
                            'total'=>$itemP[$i],
                            'given'=>$itemP1[$i],
                            'date'=>$date,
                            'created_id'=> auth()->user()->id
                            )
                        );
                        $counter2++;
                    }else{
                        if($found->total != $itemP[$i]){
                            $found->total = $itemP[$i];
                            $found->update();
                        }
                        if($found->given != $itemP1[$i]){
                            $found->given = $itemP1[$i];
                            $found->update();
                        }
                        $counter++;
                    }
                }
            }

            MonthllyPayed::insert($finalArray);

            DB::commit();
            if($counter > 0 && $counter2 > 0){
                return redirect()->route('monthPayeds.show',[$id])->with('success','تمت اضافة بعض المدخلات الشهرية بنجاح والبعض من المدخلات موجودة مسبقآ');
            }elseif($counter > 0 && $counter2 == 0){
                return redirect()->route('monthPayeds.show',[$id])->with('error','عذرآ ولكن قيمة البنود المدخلة قد تم إدخالها لهذا الشهر');
            }else{
                return redirect()->route('monthPayeds.show',[$id])->with('success','تمت تعديل كل المدخلات الشهرية بنجاح');
            }
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error','للاسف حدث خطأ ما الرجاء اعادة المحاولة');
        }
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
