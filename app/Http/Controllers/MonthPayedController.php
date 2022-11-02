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
    public function create($id)
    {
        $items = Items::get();
        $ministry = Ministrie::find($id);
        return view('add-month-pay',compact('ministry','items'));
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
            $finalArray = array();
            $items = request('item_id');
            $itemP = request('price');
            $itemd = request('door_id');
            $counter = 0;
            $counter2 = 0;
            $date = request('date').'-1';
            for ($i=0; $i < count($items); $i++) {
                if($itemP[$i] != NULL){
                    $found = MonthllyPayed::where('item_id', $items[$i])->whereDate('date', $date)->first();
                    if(!$found){
                        array_push($finalArray, array(
                            'ministry_id'=>$id,
                            'item_id'=>$items[$i],
                            'door_id'=>$itemd[$i],
                            'total'=>$itemP[$i],
                            'date'=>$date)
                        );
                        $counter2++;
                    }else{
                        $counter++;
                    }
                }
            }

            MonthllyPayed::insert($finalArray);

            DB::commit(); 
            if($counter > 0 && $counter2 > 0){
                return redirect()->back()->with('success','تمت اضافة بعض المدخلات الشهرية بنجاح والبعض من المدخلات موجودة مسبقآ');    
            }elseif($counter > 0 && $counter2 == 0){
                return redirect()->back()->with('error','عذرآ ولكن قيمة البنود المدخلة قد تم إدخالها لهذا الشهر');    
            }else{
                return redirect()->back()->with('success','تمت اضافة كل المدخلات الشهرية بنجاح');    
            }
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error','للاسف حدث خطأ ما الرجاء اعادة المحاولة');
        }
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
            $itemd = request('door_id');
            $counter = 0;
            $counter2 = 0;
            $date = request('date').'-1';
            for ($i=0; $i < count($items); $i++) {
                if($itemP[$i] != NULL){
                    $found = MonthllyPayed::where('item_id', $items[$i])->whereDate('date', $date)->first();
                    if(!$found){
                        array_push($finalArray, array(
                            'ministry_id'=>$id,
                            'item_id'=>$items[$i],
                            'door_id'=>$itemd[$i],
                            'total'=>$itemP[$i],
                            'date'=>$date)
                        );
                        $counter2++;
                    }else{
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
