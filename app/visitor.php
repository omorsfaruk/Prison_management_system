<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\prisoner;
class visitor extends Model
{
      protected $fillable =[
      'name',
      'location',
      'par_location',
      'prisonar_id',
      'gender',
      'relative',
      'phone',
      'time',
    ];

    public function prisonar(){
      return $this->belongsTo(prisoner::class);
    }
}
