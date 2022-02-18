<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cow extends Model
{
    protected $table = "cows";
    protected $primaryKey = "cow_id";
    protected $fillable = ['name','birth_date','gender','breed'];
}
