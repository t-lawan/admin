<?php

namespace App;
use App\Institution;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $fillable = array('name','grade');

  public function institution()
  {
    return $this->belongsTo(Institution::class);
  }
}
