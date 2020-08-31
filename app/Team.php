<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Team extends Model
{
    //
  //  protected $table = 'teams';
    protected $primaryKey ='team_id';
    protected $casts = [
      'team_id' => 'string'
    ];
    public $incrementing = false;
    

  

    protected $fillable=['team_id','team_name'];

    public function setSettingsAttribute($value) { $this->attributes['settings'] = $value ? $value->toJson() : null; }
}