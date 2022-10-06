<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar_model extends Model
{
    protected $table = "tb_daftar";
    protected $fillable = ['Name','Phone','Email','Date'];
}
