<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewpostController extends Controller
{
    //
    public function Kasba(){
      return view('admin.category.add.add_kasba');
    }
    public function Mizaz(){
      return view('admin.category.add.add_mizaz');
    }
    public function Hindi(){
      return view('admin.category.add.add_hindi');
    }
    public function Ravish(){
      return view('admin.category.add.add_ravish');
    }
    public function Firstpost(){
      return view('admin.category.add.firstpost');
    }
}
