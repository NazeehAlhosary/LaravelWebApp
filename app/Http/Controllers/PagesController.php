<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Larave Web App!';
        //return view('pages.index',compact('title'));//way 1 
        return view('pages.index')->with('title',$title);//way 2
    }
    public function test(){
        $title = 'Welcome to Test!';
        return view('pages.test')->with('title',$title);
    }
    public function about(){
        $title = 'Welcome to About!';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
       // $title = 'Welcome to Services!';
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design','Programming','ESO']
        );
        return view('pages.services')->with($data);
    }
}
