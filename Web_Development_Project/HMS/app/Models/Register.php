<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'day_of_week', 
        'course', 
        'coach', 
        'price', 
        'message',
    ];

    
 public function course() {
    return $this->belongsTo('App\Models\Course');
 
}
}

