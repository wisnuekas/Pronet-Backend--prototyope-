<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
    protected $table = 'user';
    protected $guarded = [];
    public $timestamps = false; //created_at dan updated_at ngga ada
}
