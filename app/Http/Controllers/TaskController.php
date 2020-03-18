<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
}*/



//realtime_todo/app/Http/Controllers/TaskController.php
//codigo copiado directamente desde pusher
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Events\TaskCreated;
	use App\Events\TaskRemoved;
	use App\Task;
	class TaskController extends Controller
	{
	    //
	    public function fetchAll(){
	        $tasks = Task::all();
	        //return response()->json($tasks);
	        return $tasks;
	    }

	    public function store(Request $request){
	        $task = Task::create($request->all());
	        broadcast(new TaskCreated($task));
	        return response()->json("added");
	    }

	    public function delete($id){
	        $task = Task::find($id);
	        broadcast(new TaskRemoved($task));
	        Task::destroy($id);
	        return response()->json("deleted");
	    }
	}

