<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
  public function Login(){
    return view('admin.posts');
  }
    public function Home(){
      return view('admin.posts');
    }

    public function Post(){
      return view('admin.edit_posts');
    }
    public function Admin(){
      return view('admin.admin');
    }

    public function postAdmin(){
      return view('admin.admin');
    }

    public function Event(){
      return view('admin.event');
    }
    public function postEvent(){
      return view('admin.event');
    }

    public function Status(){
      return view('admin.post_status');
    }
    public function postStatus(){
      return view('admin.post_status');
    }
}
