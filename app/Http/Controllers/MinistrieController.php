<?php

namespace App\Http\Controllers;

use File;
use App\Models\Ministrie;
use Illuminate\Http\Request;

class MinistrieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Ministrie::where('parent_id', NULL)->get();
        return view('all-Ministries',compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $ministry = Ministrie::find($id);
        return view('add-Ministrie',compact('ministry'));
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
                'name'  => "required|string",
            ],
            [ 
                'name.required' => 'يجب إدخال الاسم',
            ]);
        $mini = new Ministrie;
        $mini->name = request('name');
        $mini->total = request('total');
        if(request()->file('image')){
            $mini->image = request()->file('image')->store('public');
            $mini->image = str_replace('public', '', $mini->image);
        }
        $mini->parent_id = $id;            
        $mini->save();
        return redirect()->back()->with('success','تــمــت إضــافــة الـجـهـة الـتـابـعـة بــنــجــاح');
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
        $all = Ministrie::where('parent_id', $id)->paginate(15);
        return view('Sub-ministrie',compact('all','ministry'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ministry = Ministrie::find($id);
        return view('edit-Ministrie',compact('ministry'));
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
                'name'  => "required|string",
            ],
            [ 
                'name.required' => 'يجب إدخال الاسم',
            ]);
            $ministry = Ministrie::find($id);

            $ministry->name = request('name');
            $mini->total = request('total');
            if(request()->file('image')){
                if($ministry->image != "ministry.png"){
                    File::delete(public_path('storage/'.$ministry->image));
                }
                $ministry->image = request()->file('image')->store('public');
                $ministry->image = str_replace('public', '', $ministry->image);
            }
        $ministry->update();
        return redirect()->route('ministries.show',[$ministry->parent_id])->with('success','تــم تـعـديـل بـيـانـات الـجـهـة بــنــجــاح');
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
