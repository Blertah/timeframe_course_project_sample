<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
	function index()
	{
		$tasks = Task::all();
		return view("tasks.index",compact('tasks'));
	}

	function show(Task $task)
	{
		return view("tasks.details",compact('task'));
	}

	function create()
	{
		return view('tasks.create');
	}

	function edit(Task $task)
	{
		return view('tasks.edit',compact('task'));
	}

	function update(Request $request,$task)
	{
		$task = Task::find($task);
		$task->fill($request->all());
		$task->save();
		return redirect(url("tasks"));
		//return "Task modified successfuly";
	}

	function destroy(Request $request,$task)
	{
		$task = Task::find($task);

		$task->delete();
		//return url("tasks");
		return redirect(url("tasks"));
	}

	function store(Request $request)
	{
		//return $request->all();
		//return $request->all();
		
		$rules = [
	        'title' => 'required|unique:tasks|max:255',
	        'description' => 'required',
	    ];

	    $this->validate($request,$rules);
		
		$task = Task::create($request->all());
		//$tasks = Task::create(["title"=>"titulli","description"=>"pershkrimi","tesT"=>"tesT"]);
		//$task = new Task($request->all());
		//$task->title = $request->title;
		//$task->description = $request->description;
		//$task->save();
		$request->session()->flash('status', 'Task was successful!');
		return redirect(url("tasks"));
		//return "Task was created successfuly";

	}
}
