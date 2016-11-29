<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function index(){
      return view('pages.index');
    }

    public function Login(){
      return view('pages.login');
    }

    public function Like(){
      return view('pages.home');
    }

    public function Dislike(){
      return view('pages.home');
    }

    public function Community(){
      return view('pages.community');
    }

    public function Kasba(){
      return view('pages.kasba');
    }

    public function Mizaz(){
      return view('pages.mizaz');
    }

    public function Ravish(){
      return view('pages.ravish');
    }

    public function Hindi(){
      return view('pages.hindi');
    }
    public function Feedback(){
      return view('pages.posts');
    }
    public function postFeedback(){
      return view('pages.home');
    }
}
