<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function index(){
        return view('index');
}
public function about(){
        return view('about');
}
public function blog(){
        return view('blog');
}
public function cantact(){
        return view('cantact');
}
public function furn(){
        return view('furn');
}
}
