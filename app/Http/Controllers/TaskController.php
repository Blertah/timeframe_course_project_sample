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

	function store(Request $request)
	{
		return $request->all();
	}
}
