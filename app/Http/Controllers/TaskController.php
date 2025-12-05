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
        // Validations the fields
        $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'nullable',
            'due_date' => 'required|date|after_or_equal:today',
        ]);
        // Create register in the database
        Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'is_done' => $request->has('is_done'),
            'due_date' => $request->due_date,
        ]);
        // redirect to index with message of error 
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
    public function edit(Task $task){
        return view('tasks.edit', compact('task'));
    }
    /**
     * Upload Task
     */
    public function update(Request $request, $id){
        // Validate data
        $request->validate([
            'title' => 'required|min:3|max:255',
            'description' => 'nullable',
            'due_date' => 'required|date'
        ]);
        // Search the task in the bdd
        $task = Task::findOrFail($id);

        // Update the data
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'is_done' => $request->has('is_done'), // checkbox
            'due_date' => $request->due_date,
        ]);

        // Redirect with message
        return redirect()->route('tasks.index')->with('success', 'Tarea actualizada correctamente');

    }
    /**
     * Delete specify Task
     */
    public function destroy(string $id){
        // search the task
        $task = Task::findOrFail($id);

        // Delete
        $task->delete();

        // Redirect of list with message
        return redirect()->route('tasks.index')
        ->with('success', 'Tarea eliminada correctamente');
    }
}
