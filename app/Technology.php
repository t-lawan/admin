<?php

namespace App;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    //
    protected $fillable = array('name');
  public function projects()
  {
    return $this->belongsToMany(Project::class, 'project_technology', 'project_id', 'technology_id');
  }
}
