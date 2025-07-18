<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(2);
        return view('jobs/index', [
            'jobs' => $jobs
        ]);
    }

    public function create()
    {
        return view('jobs/create');
    }

    public function show(job $job)
    {
        return view('Jobs.show', ['job' => $job]);
    }

    public function store()
    {
        // dd('Hello from the reauest');
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $Job = Job::create([
            'title' => request('title'),
            'Salary' => request('salary'),
            'employer_id' => 1
        ]);

        Mail::to($Job->employer->user)->queue(
            new JobPosted($Job),
        );
        return redirect('/jobs');

    }

    public function edit(job $job)
    {

        // if(Auth::guest()){
        //     return redirect('/login');
        // }

        //Gate::authorize('edit-job',$job);

        return view('Jobs.edit', ['job' => $job]);
    }

    public function update(job $job)
    {

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        //authorization

        //update
        // $job = Job::findOrFail($job);


        //  $job->title=request('title');
        //  $job->salary=request('salary');
        //  $job->save();

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect('/jobs/' . $job->id);
    }


    public function destroy(job $job)
    {

        // $job=Job::findOrFail($id);
        $job->delete();

        //redirect
        return redirect('/jobs');
    }
}
