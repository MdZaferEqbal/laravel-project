<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index-function');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-function');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "store function is called";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = array(
            'id' => $id
        );

        return view('show-function')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = array(
            'id' => $id
        );

        return view('edit-function')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo "update function is called";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo "destroy function is called";
    }
}
