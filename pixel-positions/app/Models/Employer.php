<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class); //employer belongs to an user
    }

    public function jobs(){
        return $this->hasMany(Job::class); //employer can have many jobs
    }
}
