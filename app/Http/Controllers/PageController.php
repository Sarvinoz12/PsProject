<?php

namespace App\Http\Controllers;

use App\Models\Psixolog;
use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
public function index(){
        $psixologs = Psixolog::take(6)->whereHas('user', function ($query) {
        $query->where('role_id', 2);
    })->get();
        $services=Service::take(6)->get();
        return view('index',compact('psixologs','services'));
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
public function furn()
{
    $services = Service::all();

    return view('furn',compact('services'));
}
}
