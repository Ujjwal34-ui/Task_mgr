<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
    
        //retrieve all of the tasks when we visit the homepage
        $tasks =Task::orderBy('completed_at')
        ->orderBy('id','DESC')
        ->get();

        
        //display render of all the tasks that we have.
        
        return view('tasks.index',[
            '$tasks'=> $tasks,
        ]);
    }

    public function create(){
        return view('tasks.create');
    }

    public function store(){
        request()->validate([
            'description'=>'required|max:255',
        ]);

         Task::create([
        'description'=>request('description'),
        ]);

        

        return redirect('/') ;
    }

    public function update($id){
        $task=Task::where('id', $id)->first();

        $task->completed_at = now();
        $task->save();

        return dd($task);
    }

    public function deleted($id){
        $task =Task::where('id', $id)->first();
        $task->delete();
        return redirect('/');
    }
}
