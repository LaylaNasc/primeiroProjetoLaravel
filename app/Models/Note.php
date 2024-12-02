<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notas';
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}