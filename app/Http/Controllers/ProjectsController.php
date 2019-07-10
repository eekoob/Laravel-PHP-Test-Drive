<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {
    	$projects = Project::all();
    	//echo gettype(compact('projects'));
    	return view('projects.index',compact('projects'));
    }
	
	public function create() {
    	//$projects = Project::all();
    	return view('projects.create');
    }
    
    // This method is replaced by a php wrap model binding.
    // public function show($id) {
    // 	$project = Project::findOrFail($id);

    // 	return $project;


    // 	return view('projects.show', compact('project'));
    // }

    //Below is the wrap model binding from php
    public function show(Project $project) {

    	//return $project;


    	return view('projects.show', compact('project'));
    }

    public function edit(Project $project) {  //localhost/projects/1/edit
    	//return $id;
    	return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {

    	$project->update(request(['title','description']));
    	//replaced by $project->update(request(['title','description']));=====
    	// $project->title = request('title');
    	// $project->description = request('description');

    	// $project->save();
    	//=======================

    	return redirect('/projects');
    	//dd(request()->all());
    }
    
    public function destroy(Project $project) {
    	//dd ('delete ' . $id);
    	$project->delete();
    	//return view('projects.destroy');
    	return redirect('/projects');
    }

	public function store() {
		//=====Dont do this with guarded equal to empty array.
		// Project::create(request()->all());
		// return 'done';
		//======================

		// dd(request()->all());
		// dd( [			
		// 	'title'=>request('title'),
		// 	'description'=>request('description')
		// ]);
		$attributes = request()->validate([
			'title' => ['required', 'min:3'],
			'description' => ['required', 'min:3']
		]);


		Project::create($attributes);

		//Code below replaced by above Project::create
		// $project = new Project();
		// $project->title = request('title');
		// $project->description = request('description');
		// $project->save();

		return redirect('/projects');

		//return request();
    }
}
