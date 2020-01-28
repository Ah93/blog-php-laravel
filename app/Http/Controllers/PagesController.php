<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
       // return view('pages.index', compact('title')); pass variable
        return view('pages.index')->with('title',$title); // another way for passing variable
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title',$title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'Services' => ['Web Design', 'Programming', 'Software Development']
        );
        return view('pages.services')->with($data);
    }
}
