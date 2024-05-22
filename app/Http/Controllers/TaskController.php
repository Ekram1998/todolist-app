<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    protected $task;
    public function __construct()
    {
        $this->task = new Task();
    }

    public function index()
    {
        $tasks = Task::all();
        return response()->json([
            "data" => $tasks,
        ]);
        // return view("tasks.index")->with("tasks", $tasks);
    }

    public function store(Request $request)
    {
        $new = new Task();
        $new->title = $request->title;
        $new->description = $request->description;
        $new->is_completed = $request->is_completed;
        $new->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tasks = $this->task->find($id);
        return response()->json([
            "data"=> $tasks,
        ]);
        // return view("tasks.show")->with("tasks", $tasks);
    }

    /**
     * Update the specified resource in storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function update(Request $request, string $id)
    {
        // return view('tasks.edit');
        $tasks = $this->task->find($id);
        $tasks->update($request->all());
        return $tasks;
    }

    public function destroy(string $id)
    {
        Task::destroy($id);
        return redirect(url("api/tasks"));
    }
}
