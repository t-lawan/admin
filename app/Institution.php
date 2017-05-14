<?php

namespace App;

use App\User;
use App\Subject;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $fillable = array('name','degree','city','start_date','end_date');

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function subjects()
    {
      return $this->hasMany(Subject::class);
    }

    public function makeSubject(Subject $subject)
    {
      $this->subjects()->save($subject);
    }
}
