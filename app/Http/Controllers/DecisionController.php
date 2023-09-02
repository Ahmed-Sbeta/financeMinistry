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
                'subject'  => "required",
                'expire'  => "required",
                'date'  => "required",
            ],
            [
                'worktitle.required' => 'الرجاء كتابة عنوان القرار',
                'decisionNumber.required' => 'الرجاء كتابة رقم القرار',
                'issuer.required' => 'الرجاءاختيار الجهة الصادرة',
                'receiving.required' => 'الرجاء باختيار الجهة المستلمة',
                'subject.required' => 'الرجاء باختيار موضوع القرار',
                'expire.required' => 'الرجاء باختيار مدة القرار',
                'date.required' => 'الرجاء كتابة تاريخ القرار',
            ]);
        $decision = new Decisions;
        $decision->title = request('title');
        $decision->decisionsNumber = request('decisionNumber');
        $decision->issuer = request('issuer');
        $decision->receiver = request('receiving');
        $decision->date = request('date');
        $decision->expire = request('expire');
        $decision->subject = request('subject');
        $decision->description = request('description');
        $decision->results = request('results');
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
        $ministries = Ministrie::where("parent_id",'!=',NULL)->get();
        $decision = Decisions::find($id);
        return view('edit-decision',compact('decision','ministries'));
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
                'subject'  => "required",
                'expire'  => "required",
                'date'  => "required",
            ],
            [
                'worktitle.required' => 'الرجاء كتابة عنوان القرار',
                'decisionNumber.required' => 'الرجاء كتابة رقم القرار',
                'issuer.required' => 'الرجاءاختيار الجهة الصادرة',
                'receiving.required' => 'الرجاء باختيار الجهة المستلمة',
                'subject.required' => 'الرجاء باختيار موضوع القرار',
                'expire.required' => 'الرجاء باختيار مدة القرار',
                'date.required' => 'الرجاء كتابة تاريخ القرار',
            ]);
        $decision = Decisions::find($id);
        // dd($decision);
        $decision->title = request('title');
        $decision->decisionsNumber = request('decisionNumber');
        $decision->issuer = request('issuer');
        $decision->receiver = request('receiving');
        $decision->date = request('date');
        $decision->subject = request('subject');
        $decision->expire = request('expire');
        $decision->results = request('results');
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

    public function search(){
        if(request('number')){
            $decisions = Decisions::where('decisionsNumber', 'LIKE', '%' . request('number') . '%')->paginate(20);
        }
        elseif(request('title')){
            $decisions = Decisions::where('title', 'LIKE', '%' . request('title') . '%')->paginate(20);

        }elseif(request('date')){
            $decisions = Decisions::where('date', 'LIKE', '%' . request('date') . '%')->paginate(20);
        }
        if($decisions->count() == 0){
            return redirect()->back()->with('error',' الــذي تبــحث عنــه غيــر موجــود');
        }
        return view('decisions',compact('decisions'));
      }
}
