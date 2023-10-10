<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('tasks.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = $request->only(['title', 'due_date', 'category_id', 'description']);
        $task['user_id'] = 1;
        Task::create($task);

        return redirect(route('home.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::find($id);
        if (! $task) {
            return redirect(route('home.index'));
        }

        $categories = Category::all();

        return view('tasks.edit', ['task' => $task, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        if (! $task) {
            return 'Tarefa não encontrada';
        }
        $data = $request->only(['title', 'due_date', 'category_id', 'description']);
        $data['is_done'] = $request->is_done ? true : false;
        $task->update($data);

        return redirect(route('home.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        if (! $task) {
            return 'Tarefa não encontrada';
        }
        $task->delete();

        return redirect(route('home.index'));
    }
}
