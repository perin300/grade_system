<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradeMaster extends Model
{
    //
    protected $fillable = ['Program_code', 'Grade_name','Grade_strt_pct','Grade_end_pct','Grade_points','Grade_class_name'];

}
