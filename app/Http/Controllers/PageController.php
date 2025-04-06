<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCallingRequest;
use App\Models\Calling;
use App\Models\Psixolog;
use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
public function index(){

        $psixologs = Psixolog::all();
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
public function sendcantact(StoreCallingRequest $request)
{
    Calling::create($request->validated());
    return redirect()->back()->with('succses','Xabar adminga jo\'natildi');
}
public function furn()
{
    $services = Service::all();

    return view('furn',compact('services'));
}
}
