<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activities_Model extends Model
{
    protected $table = "tb_activities";
    protected $fillable = ['Title','Explanation','image'];
}
