<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prisoner extends Model
{
      protected $fillable =[
      'name',
      'pre_location',
      'par_location',
      'gender',
      'age',
      'education',
      'Nationality',
      'issue_date',
      'crime_type',
      'release_date',
      'crime_spot',
      'photo',
      'status',
    ];
}
