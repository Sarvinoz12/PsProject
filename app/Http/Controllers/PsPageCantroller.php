<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PsPageCantroller extends Controller
{
public function main(){
        return view('Ps.main');
}
public function addfurn(){
        return view('Ps.addfurn');
}
public function allfurn(){
        return view('Ps.allfurn',['Services'=>Service::all()]);
}
}
