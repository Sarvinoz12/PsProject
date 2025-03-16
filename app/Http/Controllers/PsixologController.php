<?php

namespace App\Http\Controllers;

use App\Models\Psixolog;
use App\Http\Requests\StorePsixologRequest;
use App\Http\Requests\UpdatePsixologRequest;

class PsixologController extends Controller
{

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePsixologRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Psixolog $psixolog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Psixolog $psixolog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePsixologRequest $request, Psixolog $psixolog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Psixolog $psixolog)
    {
        //
    }
}
