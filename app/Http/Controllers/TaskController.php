<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // ✅ READ ALL
    public function index()
    {
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    // ✅ FORM CREATE
    public function create()
    {
        return view('task.create');
    }

    // ✅ STORE (CREATE DATA)
    public function store(UpdateTaskRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        Task::create($validatedData);

        return redirect('/task')->with('success', 'Task berhasil dibuat');
    }

    // ✅ READ DETAIL
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('task.show', compact('task'));
    }

    // ✅ FORM EDIT
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('task.edit', compact('task'));
    }

    // ✅ UPDATE // 
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated()); //pakai validation yg sudah disediakan di dalam UpdateTaskRequest

        return redirect('/task') -> with('success', 'Task berhasil diupdate');
    }

    // ✅ DELETE
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/task')->with('success', 'Task berhasil dihapus');
    }
}