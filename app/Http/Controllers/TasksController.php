<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use App\Task;
use App\User;
use App\Instagram\InstagramCaller;

class TasksController extends Controller
{
    public function index()
    {
        //return Task::all();

        //$user = User::first();
        
        //$ic = new InstagramCaller($user->instagramUsers()->first()->token);
        //return $ic->self();

        return "...ok";
    }

    public function create()
    {
        // php
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|max:12'
        ]);
        $article = Task::create($request->all());
        return response()->json($article, 201);
    }

    public function show($id)
    {
        return "abbasian";
    }
    public function edit($id)
    {
        //
    }

    public function delete(Task $task)
    {
        $task->delete();

        return response()->json(null, 204);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());            
        return response()->json($task, 200);
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
