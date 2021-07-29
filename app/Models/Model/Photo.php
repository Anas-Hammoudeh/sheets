<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table='photos';
    protected $primaryKey='id';
    protected $fillable=[

    'id',
    'path'
];
    public function Posts(){
        return $this->hasMany('App\Models\Model\Comment');
    }
    use HasFactory;
}
