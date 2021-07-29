<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table='sections';
    protected $fillable=[
        'id',
        'name',
        'admin',

    ];
    use HasFactory;
    public function Admin(){
        return $this->belongsTo('App\User');
    }
    public function Posts(){
        return $this->hasMany('App\Models\Model\Post');
    }
}
