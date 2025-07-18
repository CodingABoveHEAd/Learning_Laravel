<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\registeredUserController;
use App\Http\Controllers\SessionController;
use App\Jobs\TranslateJob;
use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

// Home route
// Route::get('/', function () {
//     return view('Home');
// });

Route::view('/','Home');


// All jobs listing
Route::get('/jobs',[JobController::class,'index']);
Route::get('/jobs/create',[JobController::class,'create']);
Route::post('/jobs',[JobController::class,'store'])->middleware('auth');
Route::get('/jobs/{job}',[JobController::class,'show'] );

Route::get('/jobs/{job}/edit', [JobController::class,'edit'])
->middleware('auth')
->can('edit','job');

Route::patch('/jobs/{job}', [JobController::class,'update']);
Route::delete('/jobs/{job}',[JobController::class,'destroy']);


// Route::resource('/jobs',JobController::class,[
//     'only'=>['index','show','create','store']
// ]);

// Contact route
Route::view('/contact','contact');

Route::get('/register',[registeredUserController::class, 'create']);
Route::post('/register',[registeredUserController::class, 'store']);
Route::get('/login',[SessionController::class, 'create'])->name('login');
Route::post('/login',[SessionController::class, 'store']);
Route::post('/logout',[SessionController::class, 'destroy']);


// Route::get('test',function(){
//    Mail::to('chowdhuryniloy819@gmail.com')->send(
//     new JobPosted(),
//    );
//    return 'Done';
// });

Route::get('/test',function(){
    $job=Job::first();
   TranslateJob::dispatch($job);
});