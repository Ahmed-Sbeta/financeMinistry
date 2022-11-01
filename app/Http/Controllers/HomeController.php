<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Items;

class HomeController extends Controller
{
      public function index()
      {
          return view('dashboard');
      }

      public function login(){
        return view('auth-login');
      }

      public function addItem($id){

        $item = new Items;
        $item->name = request('worktitle');
        $item->door=$id;
        $item->save();
        return redirect()->back()->with('success','تــمــت إضــافــة البــنــد بــنــجــاح');
      }

}
