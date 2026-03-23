<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    /**
     *
     *
     *
     * @var array
     */
    protected $fillable = [
        'name',    
        'email',   
        'phone',   
        'detail',     
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'coachID');
    }
}
