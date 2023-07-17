<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stack;
use App\Http\Requests\StoreStackRequest;
use App\Http\Requests\UpdateStackRequest;

class StackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStackRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStackRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function show(Stack $stack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function edit(Stack $stack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStackRequest  $request
     * @param  \App\Models\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStackRequest $request, Stack $stack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stack  $stack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stack $stack)
    {
        //
    }
}
