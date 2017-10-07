<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        // return Task::where('status', false).get();
        return Task::all();
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return $request->all;
    }

    public function show($id)
    {
        return "abbasian";
    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function start()
    {
        return "abbasian";
    }
}
