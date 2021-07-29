<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoViews extends Model
{
protected $fillable=[
    'user_id',
    'video_id'
];
    protected $table='video-views';

    public function video(){
        return $this->belongsTo('App\Models\Video');
    }
    public function user(){
        return $this->belongsToMany('App\Models\User');
    }
    use HasFactory;
}
