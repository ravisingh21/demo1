<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends Controller
{    //
    public function Kasba(){
      return view('admin.category.pages.kasba');
    }

    public function Mizaz(){
      return view('admin.category.pages.mizaz');
    }

    public function Ravish(){
      return view('admin.category.pages.ravish');
    }

    public function Hindi(){
      return view('admin.category.pages.hindi');
    }
    public function Create(){
      return view('admin.category.pages.create');
    }
}
