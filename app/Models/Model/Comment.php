<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    protected $primaryKey='id';
    protected $fillable=[
    'id',
    'content',
    'post_id',
    'user_id'
];
    use HasFactory;
    public function User(){
        return $this->belongsTo('App\Models\User');
    }
    public function Post(){
        return $this->belongsTo('App\Models\Model\Post');
    }
}
