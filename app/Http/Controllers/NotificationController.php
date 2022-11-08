<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Notification::where([['receive_id', auth()->user()->id],['read', 0]])->update(['read' => 1,'show' => 1]);
        $notifications = Notification::where('receive_id', auth()->user()->id)->latest()->paginate(15);
        return view('notifications',compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role_id != 1){
            return redirect()->back()->with('error','عذرآ غير مسموح لك بالتواجد في هذه الصفحة');
        }
        return view('add-notification');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(
            [
                'title'  => "required",
                'priority'  => "required",
            ],
            [ 
                'title.required' => 'يجب إدخال عنوان الاشعار',
                'priority.required' => 'يجب تحديد أهمية الاشعار',
            ]);

        if(auth()->user()->role_id != 1){
            return redirect()->back()->with('error','عذرآ غير مسموح لك بالتواجد في هذه الصفحة');
        }
        DB::beginTransaction();
        try {
            $finalArray = array();
            $title = request('title');
            $desc = request('desc');
            $priority = request('priority');
            $users = User::get();
            $max = Notification::max('num');
            $max += 1;
            foreach ($users as $user) {
                array_push($finalArray, array(
                    'receive_id'=>$user->id,
                    'title'=>$title,
                    'desc'=>$desc,
                    'num'=>$max,
                    'priority'=>$priority,
                    'created_at'=>\Carbon\Carbon::now()
                    )
                );
            }
            Notification::insert($finalArray);
            DB::commit();
            return redirect()->back()->with('success','تــمــت إضــافــة الاشــعــار بــنــجــاح'); 
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
        if(auth()->user()->role_id != 1){
            return redirect()->back()->with('error','عذرآ غير مسموح لك بالتواجد في هذه الصفحة');
        }
        Notification::where('num', $id)->delete();
        return redirect()->back()->with('success','تــم حــذفـ الاشــعــار بــنــجــاح'); 
    }
}
