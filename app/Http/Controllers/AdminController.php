<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index(){
      return view('admin.index');
    }

    public function getPost(){
      return view('admin.posts.index');
    }

    public function getCategory(){
      return view('admin.category.index');
    }

}
