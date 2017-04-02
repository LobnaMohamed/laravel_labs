<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Task;
class TaskController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function viewTasks($id)
    {
      //get tasks of specific user:
      if($id == Auth::user()->id){
      
      $tasks = Task::where('user_id',$id)->get();
      // return view('viewTasks')->with('tasks',$tasks);
      return view('viewTasks',compact('tasks'));
      
    }

    }
    public function addTaskForm()
    {
        return view('addTask');
    }
    public function addTaskData(Request $data)
    {
      $this->validate($data, [
     'task' => 'required|min:4|max:200'
      ]);
      $newTask = new Task;
      $newTask->task_title = $data->get("task");
      $newTask->user_id = Auth::user()->id;
      $newTask->save();
      return redirect("/viewTasks/$newTask->user_id");
      
    }
    public function editTaskForm($id)
    {
      $tasks = Task::find($id);
      return view('editTask',compact('tasks'));
    }
    public function editTaskData(Request $data,$id)
    {
        $this->validate($data, [
         'task' => 'required|min:4|max:200'
        ]);

        $editTask = Task::find($id);
        $editTask->task_title = $data->task;
        $editTask->save();
        return redirect("/viewTasks/$editTask->user_id");
    }
    public function deleteTask($id)
    {
      Task::find($id)->delete();
      return back();
    }

}
