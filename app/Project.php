<?php

namespace App;
use App\Technology;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable = array('name','description','github_link','site_link');

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function technologies()
    {
      return $this->belongsToMany(Technology::class, 'project_technology', 'project_id', 'technology_id');
    }

    public function addTechnology(Technology $technology)
    {
      $this->technologies()->attach($technology);
    }
}
