<?php

namespace App;

use App\Grade;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

  public function grade(){
      return $this->hasOne('App\Grade');
  }

  public function actors(){
      return $this->belongsToMany('App\Actor');
  }

  public function getRating(){
      return $this->grade->rating;
  }

}
