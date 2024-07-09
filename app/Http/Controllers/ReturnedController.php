<?php

namespace App\Http\Controllers;

use App\Models\returned;
use Illuminate\Http\Request;

class ReturnedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('returned.returned');
    }

    public function returnedadd()
    {
        return view('returned.returned_add');
    }

    public function returnededit()
    {
        return view('returned.returned_edit');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(returned $returned)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(returned $returned)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, returned $returned)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(returned $returned)
    {
        //
    }
}
