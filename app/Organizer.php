<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    protected $table = 'Organizer';
    protected $fillable = [
        'name',
       
        'image'
        
    ];
}
