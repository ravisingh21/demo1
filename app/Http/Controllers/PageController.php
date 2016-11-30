<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function index(){
      return view('front.index');
    }

    public function Login(){
      return view('front.login');
    }

    public function Kasba(){
      return view('front.kasba');
    }

    public function Mizaz(){
      return view('front.mizaz');
    }

    public function Ravish(){
      return view('front.ravish');
    }

    public function Hindi(){
      return view('front.hindi');
    }
    public function Feedback(){
      return view('front.posts');
    }

    public function Community(){
      return view('front.community');
    }
    public function postFeedback(){
      return view('front.home');
    }
}
