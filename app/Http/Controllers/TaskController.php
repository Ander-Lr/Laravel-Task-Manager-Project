<?php

namespace App\Http\Controllers;
use App\Models\Task;



use Illuminate\Http\Request;

class TaskController extends Controller{
    /**
     * List task
     */
    public function index(){
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    /**
     * Show form for create task   
     */
    public function create(){
       return view('tasks.create');
    }
    /**
     * Save new task
     */
    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'due_date' => 'nullable|date',
        ]);

        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_done' => $request->has('is_done'),
            'due_date' => $request->due_date,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tarea creada correctamente');
    }
    /**
     * Look an specify task
     */
    public function show(string $id){
        //
    }
    /**
     * Form for edit specify task
     */
    public function edit(string $id){
        //
    }
    /**
     * Upload Task
     */
    public function update(Request $request, string $id){
        //
    }
    /**
     * Delete specify Task
     */
    public function destroy(string $id)
    {
        //
    }
}
