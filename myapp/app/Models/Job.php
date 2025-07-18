<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migrator;
use Illuminate\Support\Arr;

class Job extends Model{
    use HasFactory;
    protected $table='job_listing';
    protected $fillable=['title','Salary','employer_id'];
    protected $guarded=[];
    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class,foreignPivotKey:'job_listing_id');
    }
};



// public static function all():array

// {
//     return [

//             [
//                 'id' => '1',
//                 'title' => 'Director',
//                 'Salary' => '$50,000'
//             ],
//             [
//                 'id' => '2',
//                 'title' => 'Programmer',
//                 'Salary' => '$100,000'
//             ],
//             [
//                 'id' => '3',
//                 'title' => 'Actor',
//                 'Salary' => '$20,000'
//             ]
//         ];

// }

// public static function find(int $id): array{
//     $job= Arr::first(static::all(),fn($job)=>$job['id']==$id);
//     if(! $job){
//         abort(404);
//     }
//     return $job;
    
// }
