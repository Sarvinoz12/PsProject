<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageCantroller extends Controller
{
public function main(){
        return view('Admin.main');
}
public function addps(){
        return view('admin.addps');
}
public function allps(){
        return view('admin.allps');
}
}
