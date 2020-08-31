<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'tasks';
    protected $primaryKey ='task_id';
    protected $casts = [
      'task_id' => 'string'
    ];
    public $incrementing = false;
    


    protected $fillable=['id','title','task_id','team_id','status','description','assignee_id'];
}
