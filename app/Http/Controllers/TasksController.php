<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function __construct(){
        $this->tasks = [];
    }

    public function getTasks(){
        $tasks = DB::table('tasks')
        ->select(array('id', 'title', 'description'))
        ->get();
        return $tasks;
    }

    public function getTasksById(int $id){
        $task = DB::table('tasks')
        ->select('id', 'title', 'description')
        ->where('id', $id)
        ->get();
        return $task[0];
    }


    public function updateTask(int $id, Request $request){
        DB::table('tasks')
        ->where('id', $id)
        ->update([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
        return redirect()->route('home');
    }

    // implementar delete
    public function deleteTask(int $id){
        DB::table('tasks')
        ->where('id', $id)
        ->delete();
        return redirect()->route('home');
    }

    public function addTask(Request $request){
        $validated = $request->validate([
            'title'=>['required', 'max:255']
        ]);
        if ($validated) {
            $newTask = [
                'title'=>$request->title,
                'description'=>$request->description
            ];
            DB::table('tasks')
            ->insert($newTask);
            return redirect()->route('home');
        } else {
            return redirect()->route('home')->withErrors($validated);
        }
    }

    public function listTasks(){
        return view('layouts.tasks', ['tasks' => $this->getTasks()]);
    }

    public function editTask(int $id = -1){
        return view('editar', ['task'=>$this->getTasksById($id)]);
    }
}
