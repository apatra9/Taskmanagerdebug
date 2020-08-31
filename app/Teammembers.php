<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teammembers extends Model
{
    //

    protected $primaryKey ='team_id';
    protected $casts = [
      'team_id' => 'string'
    ];
    public $incrementing = false;
    
    protected $fillable=['team_id','member_name', 'member_id','member_email'];
}
