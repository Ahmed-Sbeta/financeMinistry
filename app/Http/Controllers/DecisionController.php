<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Decisions;

class DecisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decisions = Decisions::all();
        return view('decisions',compact('decisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-decisions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $decision = new Decisions;
        $decision->title = request('title');
        $decision->decisionsNumber = request('decisionNumber');
        $decision->issuer = request('issuer');
        $decision->receiver = request('receiving');
        $decision->date = request('date');
        $decision->description = request('description');
        $file = request()->file('file');
        $name = $file->getClientOriginalName();
        $name = str_replace(' ', '', $name);
        $decision->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
        $decision->save();
        return redirect()->back()->with('success','تـم إضـــافــة قــرار بــنــجــاح');
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
        $decision = Decisions::find($id);
        return view('edit-decision',compact('decision'));
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
        $decision = Decisions::find($id);
        // dd($decision);
        $decision->title = request('title');
        $decision->decisionsNumber = request('decisionNumber');
        $decision->issuer = request('issuer');
        $decision->receiver = request('receiving');
        $decision->date = request('date');
        $decision->description = request('description');
        if(request()->file('file') != Null){
          $file = request()->file('file');
          $name = $file->getClientOriginalName();
          $name = str_replace(' ', '', $name);
          $decision->file = request()->file('file') ? request()->file('file')->storePubliclyAs('',$name) : null;
        }
        $decision->update();
        return redirect()->route('decisions.edit',[$decision->id])->with('success','تــم تـعـديـل الــقـــرار بـــنــجـــاح');
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
