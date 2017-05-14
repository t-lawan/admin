<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects()
    {
      return $this->hasMany(Project::class);
    }


    public function institutions()
    {
      return $this->hasMany(Institution::class);
    }

    public function experiences()
    {
      return $this->hasMany(Experience::class);
    }

    public function makeProject(Project $project)
    {
        $this->projects()->save($project);
    }

    public function makeInstitution(Institution $institution)
    {
        $this->institutions()->save($institution);
    }

    public function makeExperience(Experience $experience)
    {
        $this->experiences()->save($experience);
    }


}
