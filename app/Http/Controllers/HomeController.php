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
        $door1 = MonthllyPayed::where('door_id', 1)->whereYear('date', date('Y'))->sum('total');
        $door2 = MonthllyPayed::where('door_id', 2)->whereYear('date', date('Y'))->sum('total');
        $door3 = MonthllyPayed::where('door_id', 3)->whereYear('date', date('Y'))->sum('total');
        $door4 = MonthllyPayed::where('door_id', 4)->whereYear('date', date('Y'))->sum('total');
        $door5 = MonthllyPayed::where('door_id', 5)->whereYear('date', date('Y'))->sum('total');
        // $total = [];
        // $total2 = [];
        // $total[0] = MonthllyPayed::whereYear('created_at', date('Y'))->sum('total');
        // $total[1] = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 1)->sum('total');
        // $total[2] = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 2)->sum('total');
        // $total[3] = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 3)->sum('total');
        // $total[4] = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 4)->sum('total');
        // $total[5] = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 5)->sum('total');
        // $total2[0] = MonthllyPayed::whereYear('created_at', date('Y'))->sum('given');
        // $total2[1] = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 1)->sum('given');
        // $total2[2] = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 2)->sum('given');
        // $total2[3] = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 3)->sum('given');
        // $total2[4] = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 4)->sum('given');
        // $total2[5] = MonthllyPayed::whereYear('created_at', date('Y'))->where('door_id', 5)->sum('given');

        $total = MonthllyPayed::whereYear('date', date('Y'))->sum('total');
        $total2 = MonthllyPayed::whereYear('date', date('Y'))->sum('given');

        $child_arr = [];
        for ($i=1; $i <= 12; $i++) {
            $child_arr['all'][$i] = MonthllyPayed::whereYear('date', date('Y'))->whereMonth('date', $i)->sum('total');
            $child_arr['given'][$i] = MonthllyPayed::whereYear('date', date('Y'))->whereMonth('date', $i)->sum('given');

        }
        $year = now()->format('Y');


        $notifications = Notification::where('receive_id', auth()->user()->id)->count();
        $decisionsCount = Decisions::count();
        return view('dashboard',compact('ministries','subMinistries','notifications','decisionsCount','decisions','items','users','door1','door2','door3','total','total2','door4','door5','year','child_arr'));
      }

      public function yearFilter()
      {
        $ministries = Ministrie::where('parent_id', NULL)->count();
        $subMinistries = Ministrie::where('parent_id', '!=', NULL)->count();
        $items = Items::count();
        $decisions = Decisions::take(10)->get();
        $users = User::where('role_id', '!=', 1)->count();
        $door1 = MonthllyPayed::where('door_id', 1)->whereYear('date', request('year'))->sum('total');
        $door2 = MonthllyPayed::where('door_id', 2)->whereYear('date', request('year'))->sum('total');
        $door3 = MonthllyPayed::where('door_id', 3)->whereYear('date', request('year'))->sum('total');
        $door4 = MonthllyPayed::where('door_id', 4)->whereYear('date', request('year'))->sum('total');
        $door5 = MonthllyPayed::where('door_id', 5)->whereYear('date', request('year'))->sum('total');

        $total = MonthllyPayed::whereYear('date', request('year'))->sum('total');
        $total2 = MonthllyPayed::whereYear('date', request('year'))->sum('given');

        // $child_arr = [];
        // for ($i=1; $i <= 12; $i++) {
        //     $child_arr['all'][$i] = MonthllyPayed::whereYear('date',request('year'))->whereMonth('date', $i)->sum('total');
        //     $child_arr['door1'][$i] = MonthllyPayed::whereYear('date', request('year'))->whereMonth('date', $i)->where('door_id', 1)->sum('total');
        //     $child_arr['door2'][$i] = MonthllyPayed::whereYear('date', request('year'))->whereMonth('date', $i)->where('door_id', 2)->sum('total');
        //     $child_arr['door3'][$i] = MonthllyPayed::whereYear('date', request('year'))->whereMonth('date', $i)->where('door_id', 3)->sum('total');
        //     $child_arr['door4'][$i] = MonthllyPayed::whereYear('date', request('year'))->whereMonth('date', $i)->where('door_id', 4)->sum('total');
        //     $child_arr['door5'][$i] = MonthllyPayed::whereYear('date', request('year'))->whereMonth('date', $i)->where('door_id', 5)->sum('total');
        // }
        // $year = request('year');
        $child_arr = [];
        for ($i=1; $i <= 12; $i++) {
            $child_arr['all'][$i] = MonthllyPayed::whereYear('date', request('year'))->whereMonth('date', $i)->sum('total');
            $child_arr['given'][$i] = MonthllyPayed::whereYear('date', request('year'))->whereMonth('date', $i)->sum('given');

        }
        $year = request('year');
//

        $notifications = Notification::where('receive_id', auth()->user()->id)->count();
        $decisionsCount = Decisions::count();
        return view('dashboard',compact('ministries','subMinistries','notifications','decisionsCount','decisions','items','users','door1','door2','door3','total','total2','door4','door5','year','child_arr'));
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
