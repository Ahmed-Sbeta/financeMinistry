<?php

namespace App\Http\Controllers;

use File;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id', '>', auth()->user()->id)->paginate(15);
        return view('employees',compact('users'));
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
        $roles = Role::where('id','!=',1)->get();
        return view('add-employee',compact('roles'));
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
            'name'  => "required|string",
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'work_id'  => "required|numeric",
            'phoneNumber'  => "required|numeric",
            'role'  => "required",
        ],
        [
            'name.required' => 'يجب إدخال الاسم',
            'email.required' => 'يجب اضافة البريد الالكتروني',
            'email.email' => 'يجب اضافة البريد الالكتروني',
            'email.unique' => 'البريد الالكتروني الذي قمت بإدخاله موجود',
            'password.required' => 'يجب اضافة كلمة المرور',
            'password.min' => 'يجب ان تكون كلمة المرور من 8 خانات علي الاقل',
            'password.confirmed' => 'كلمة المرور الجديدة غير مطابقة مع الاعادة',
            'work_id.required' => 'يجب اضافة الرقم الوظيفي',
            'work_id.numeric' => 'يجب ان يحتوي الرقم الوظيفي علي ارقام فقط',
            'phoneNumber.required' => 'يجب اضافة رقم الهاتف',
            'phoneNumber.numeric' => 'يجب ان يحتوي رقم الهاتف علي ارقام فقط',
            'role.required' => 'يجب تحديد نوع الوظيفة',
        ]);
        $user = new User;
        $user->name = request('name');
        $user->work_id = request('work_id');
        $user->phoneNumber = request('phoneNumber');
        $user->email = request('email');
        $user->role_id = request('role');
        if(request()->file('image')){
            $user->image = request()->file('image')->store('public');
            $user->image = str_replace('public', '', $user->image);
        }
        $user->password = Hash::make(request('password'));
        $user->save();

        return redirect()->back()->with('success','تــمــت إضــافــة مـسـتـخـدم بــنــجــاح');
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
        $user = User::find($id);
        $roles = Role::get();
        return view('edit-employee',compact('user','roles'));
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
                'work_id'  => "required|numeric",
                'phoneNumber'  => "required|numeric",
                'role'  => "required",
            ],
            [
                'name.required' => 'يجب إدخال الاسم',
                'work_id.required' => 'يجب اضافة الرقم الوظيفي',
                'work_id.numeric' => 'يجب ان يحتوي الرقم الوظيفي علي ارقام فقط',
                'phoneNumber.required' => 'يجب اضافة رقم الهاتف',
                'phoneNumber.numeric' => 'يجب ان يحتوي رقم الهاتف علي ارقام فقط',
                'role.required' => 'يجب تحديد نوع الوظيفة',
            ]);
            $user = User::find($id);
            $user->name = request('name');
            $user->work_id = request('work_id');
            $user->phoneNumber = request('phoneNumber');
            $user->role_id = request('role');
            if(request()->file('image')){
                if($user->image != "user.png"){
                    File::delete(public_path('storage/'.$user->image));
                }
                $user->image = request()->file('image')->store('public');
                $user->image = str_replace('public', '', $user->image);
            }
            $user->update();

            return redirect()->route('users.index')->with('success','تــم تـعـديـل بـيـانـات المـسـتـخـدم بــنــجــاح');
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
