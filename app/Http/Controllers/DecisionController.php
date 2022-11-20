<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Decisions;
use App\Models\Ministrie;
use File;

class DecisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decisions = Decisions::paginate(20);
        return view('decisions',compact('decisions'));
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
        $ministries = Ministrie::where("parent_id",'!=',NULL)->get();
        return view('add-decisions',compact('ministries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->role_id != 1){
            return redirect()->back()->with('error','عذرآ غير مسموح لك بالتواجد في هذه الصفحة');
        }
        request()->validate(
        [
            'title'  => "required",
            'decisionNumber'  => "required",
            'issuer'  => "required",
            'receiving'  => "required",
            'date'  => "required",
            'file'  => "required",
        ],
        [ 
            'worktitle.required' => 'الرجاء كتابة عنوان القرار',
            'decisionNumber.required' => 'الرجاء كتابة رقم القرار',
            'issuer.required' => 'الرجاءاختيار الجهة الصادرة',
            'receiving.required' => 'الرجاء باختيار الجهة المستلمة',
            'date.required' => 'الرجاء كتابة تاريخ القرار',
            'file.required' => 'الرجاء تحميل ملف القرار',
        ]);
        $decision = new Decisions;
        $decision->title = request('title');
        $decision->decisionsNumber = request('decisionNumber');
        $decision->issuer = request('issuer');
        $decision->receiver = request('receiving');
        $decision->date = request('date');
        $decision->description = request('description');
        $newFilePath = request()->file('file')->store('public');
        $decision->file = str_replace('public', '', $newFilePath);
        $decision->save();
        return redirect()->route('decisions.index')->with('success','تـم إضـــافــة قــرار بــنــجــاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $des = Decisions::find($id);
        return response()->download(public_path('storage'.$des->file));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth()->user()->role_id != 1){
            return redirect()->back()->with('error','عذرآ غير مسموح لك بالتواجد في هذه الصفحة');
        }
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
        if(auth()->user()->role_id != 1){
            return redirect()->back()->with('error','عذرآ غير مسموح لك بالتواجد في هذه الصفحة');
        }
        request()->validate(
            [
                'title'  => "required",
                'decisionNumber'  => "required",
                'issuer'  => "required",
                'receiving'  => "required",
                'date'  => "required",
            ],
            [ 
                'worktitle.required' => 'الرجاء كتابة عنوان القرار',
                'decisionNumber.required' => 'الرجاء كتابة رقم القرار',
                'issuer.required' => 'الرجاءاختيار الجهة الصادرة',
                'receiving.required' => 'الرجاء باختيار الجهة المستلمة',
                'date.required' => 'الرجاء كتابة تاريخ القرار',
            ]);
        $decision = Decisions::find($id);
        // dd($decision);
        $decision->title = request('title');
        $decision->decisionsNumber = request('decisionNumber');
        $decision->issuer = request('issuer');
        $decision->receiver = request('receiving');
        $decision->date = request('date');
        $decision->description = request('description');
        if(request()->file('file')){
            File::delete(public_path('storage/'.$decision->file));
            $newFilePath = request()->file('file')->store('public');
            $decision->file = str_replace('public', '', $newFilePath);
        }
        $decision->update();
        return redirect()->route('decisions.index')->with('success','تــم تـعـديـل الــقـــرار بـــنــجـــاح');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $des = Decisions::find($id);
        File::delete(public_path('storage/'.$des->file));
        $des->delete();
        return redirect()->back()->with('success','تم مــسـح الــقــرار بـنـجـاح');
    }
}
