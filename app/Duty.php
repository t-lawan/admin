<?php

namespace App;
use App\Experience;
use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    //
    protected $fillable = array('description');

    public function experience()
    {
      return $this->belongsTo(Experience::class);
    }
}
