<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
	public function store(Project $project) {
		$project->addTask(
			request()->validate(['description' => 'required'])
		);
		// Replaced by the code above===========
		// Task::create([
		// 	'project_id' => $project->id,
		// 	'description' => request('description')
		// ]);
		// ======================
		return back();
	}
	//REMOVED as there is a dedicated "CompletedTasksController"=========
    // public function update(Task $task)
    // {
    // 	$method = request()->has('completed') ? 'complete' : 'incomplete';
    	
    // 	//replaced be code above==========
    // 	// if (request()->has('completed')) {
    // 	// 	$task->complete();
    // 	// } else {
    // 	// 	$task->incomplete();
    // 	// }
    // 	//=================

    // 	// $task->update([
    // 	// 	'completed' => request()->has('completed')
    // 	// ]);
    // 	$task->$method();

    // 	return back();
    // }
    // =======================
}
