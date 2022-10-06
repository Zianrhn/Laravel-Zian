<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poster_Model extends Model
{
    protected $table = "tb_poster";
    protected $fillable = ['Title','image'];
}
