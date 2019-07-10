<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	//Add fillable property to allow mass assignment on [App\Task].
    protected $fillable = [
    	'project_id',
    	'description',
    	'completed'
    ];

    public function complete ($completed = true)
    {
        $this->update(compact('completed'));
    }

    public function incomplete() 
    {
        $this->complete(false);
    }

    public function project()
    {
    	return $this->belongsTo(Project::class);
    }
}
