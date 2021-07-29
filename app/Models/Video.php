<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table='videos';


    use HasFactory;
    public  function views(){
        return $this->hasMany('App\Models\VideoViewws');
    }
}
