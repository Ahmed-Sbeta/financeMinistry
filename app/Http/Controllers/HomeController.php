<?php

namespace App\Http\Controllers;

use App\Models\Codes;
use App\Models\Decisions;
use Carbon\Carbon;
use App\Models\User;
use Response;
use App\Models\Items;
use App\Models\Ministrie;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\MonthllyPayed;

class HomeController extends Controller
{

      public function index()
      {
        $ministries = Ministrie::where('parent_id', NULL)->count();
        $subMinistries = Ministrie::where('parent_id', '!=', NULL)->count();
        $items = Items::count();
        $decisions = Decisions::take(10)->get();
        $users = User::where('role_id', '!=', 1)->count();
        $door1 = MonthllyPayed::where('door_id', 1)->sum('total');
        $door2 = MonthllyPayed::where('door_id', 2)->sum('total');
        $door3 = MonthllyPayed::where('door_id', 3)->sum('total');
        $door4 = MonthllyPayed::where('door_id', 4)->sum('total');
        $door5 = MonthllyPayed::where('door_id', 5)->sum('total');
        $total = MonthllyPayed::whereYear('created_at', date('Y'))->sum('total');
        $total1 = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 1)->sum('total');
        $total2 = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 2)->sum('total');
        $total3 = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 3)->sum('total');
        $total4 = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 4)->sum('total');
        $total5 = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 5)->sum('total');
        $notifications = Notification::where('receive_id', auth()->user()->id)->count();
        $decisionsCount = Decisions::count();
        return view('dashboard',compact('ministries','subMinistries','notifications','decisionsCount','decisions','items','users','door1','door2','door3','door4','door5','total','total1','total2','total3','total4','total5'));
      }

      public function login(){
        return view('auth-login');
      }

      public function notifications()
      {
        $data = notification::where([['receive_id', auth()->user()->id],['show', 0]])->get();
        $count = notification::Where([['receive_id', auth()->user()->id],['read', 0]])->count();
        return json_encode(array('data'=>$data, 'count'=>$count));
      }

      public function changeShowNotification()
      {
          Notification::where([['receive_id', auth()->user()->id],['show', 0]])
          ->update(['show' => 1]);
          return;
      }

      public function GetNewCodes($id)
      {
        Codes::where('active', true)->delete();
        for ($i=0; $i < $id; $i++) {
          $code = new Codes;
          $code->code = $this->generateUniqueCode();
          $code->save();
        }
        return redirect()->back()->with('success','تم إنشاء رموز جديدة بنجاح');
      }

      public function generateUniqueCode()
      {
          $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $charactersNumber = strlen($characters);
          $codeLength = 6;
          $code = '';
          while (strlen($code) < 6) {
              $position = rand(0, $charactersNumber - 1);
              $character = $characters[$position];
              $code = $code.$character;
          }
          if (Codes::where('code', $code)->exists()) {
              $this->generateUniqueCode();
          }
          return $code;
      }
}
