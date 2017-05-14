<?php

namespace App;
use App\Duty;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    //
  protected $fillable = array('company_name','role','city','start_date','end_date');

  public function duties()
  {
    return $this->hasMany(Duty::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function makeDuty(Duty $duty)
  {
    $this->duties()->save($duty);
  }
}
