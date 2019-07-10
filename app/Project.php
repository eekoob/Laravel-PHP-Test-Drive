<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //Add [title] to fillable property to allow mass assignment on [App\Project].
    protected $fillable = [
    	'title', 'description'
    ];

    // or using guarded which is opposite of fillable.
    //protected $guarded = [

    //];

    public function tasks() 
    {
    	return $this->hasMany(Task::class);
    }

    public function addTask($task) {
        $this->tasks()->create($task);

        // Replaced by the code above===========
        // return Task::create([
        //  'project_id' => $this->id,
        //  'description' => $description
        // ]);
        // ======================
    }
}

