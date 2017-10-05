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

	function edit(Task $task){
		return view('tasks.edit',compact('task'));
	}
	function store(Request $request)
	{
		//return $request->all();
		//return $request->all();
	
		$task = Task::create($request->all());
		//$tasks = Task::create(["title"=>"titulli","description"=>"pershkrimi","tesT"=>"tesT"]);
		//$task = new Task($request->all());
		//$task->title = $request->title;
		//$task->description = $request->description;
		//$task->save();
		return "Task was created successfuly";

	}
}
