<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

    } 
    
    public function create(Request $request) {
        $categories = Category::all();

        $data['categories'] = $categories;    
        
        return view('create');
    
    }

    public function create_action(Request $r) {
        $task = $r->only(['title','category','description','due_date']);
        $task['user_id'] = 1;
        $task['is_done'] = false;
        $task['category_id'] = 1;
        $dbTask = Task::create($task);
        return redirect(route('home'));
    }    

    public function edit(Request $request) {
        $id = $request->id;
        
        $task = Task::find($id);
        if (!$task) {
            return redirect(route('home'));
        }

        $data['task'] = $task;

        return view('edit', $data);
        
    }

    public function delete(Request $request) {

        $id = $request->id;

        $task = Task::find($id);

        if ($task) {
            $task->delete();
        }



        return redirect(route('home'));    
    }
    
}
