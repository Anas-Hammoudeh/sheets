<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $fillable = ['ticket_id','ticket_data','modified_by','description'];
    protected $casts=[
        'ticket_data'=>'array'
    ];
}
