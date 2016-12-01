<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemira extends Model
{
    protected $table = 'pemira';
    protected $guarded = ['id'];
    public $timestamps = false; //created_at dan updated_at ngga ada

}
