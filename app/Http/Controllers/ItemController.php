<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('add-Item'.$id);
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
            'worktitle'  => "required|string",
        ],
        [ 
            'worktitle.required' => 'الرجاء كتابة البند الجديد',
        ]);
        $item = new Items;
        $item->name = request('worktitle');
        $item->door=$id;
        $item->save();
        return redirect()->back()->with('success','تــمــت إضــافــة البــنــد بــنــجــاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = items::where('door','=',$id)->paginate(15);
        return view('Door'.$id,compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Items::find($id);
        return view('edit-Item',compact('item'));
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
                'worktitle'  => "required|string",
            ],
            [ 
                'worktitle.required' => 'الرجاء كتابة البند الجديد',
            ]);
        $item = Items::find($id);
        $item->name = $request->worktitle;
        $item->update();

        return redirect()->route('items.show',[$item->door])->with('success','تــم تـعـديـل البــنــد بــنــجــاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Items::find($id)->delete();
        return redirect()->back()->with('success','تــم حـــذف البــنــد بــنــجــاح');
    }


}
