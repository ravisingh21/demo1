<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
  public function Attach(){
    return view('admin.attach');
  }

  public function postAttach(){
    return view('admin.posts');
  }

  public function Kasba(){
    return view('admin.kasba');
  }

  public function postKasba(){
    return view('admin.kasba');
  }

  public function Mizaz(){
    return view('admin.mizaz');
  }
  public function postMizaz(){
    return view('admin.mizaz');
  }

  public function Ravish(){
    return view('admin.ravish');
  }
  public function postRavish(){
    return view('admin.ravish');
  }
  public function Hindi(){
    return view('admin.hindi');
  }
  public function postHindi(){
    return view('admin.hindi');
  }
}
