<?php

namespace App\Http\Controllers;

use App\Http\Resources\JobCollection;
use App\Http\Resources\Job as JobResource;
use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $this->authorize('viewAny', Job::class);

        return new JobCollection(Job::paginate());
    }

    public function show(Job $job){
        $this->authorize('view', $job);

        return response()->json(new JobResource($job),200);
    }

    public function store(Request $request){
        $this->authorize('create', Job::class);

        $job= Job::create($request->all());
        return response()->json($job,201);
    }

    public function update(Request $request,Job $job){
        $this->authorize('update', $job);

        $job->update($request->all());
        return response()->json($job,200);
    }

    public function delete(Job $job){
        $this->authorize('delete', $job);

        $job->delete();
        return response()->json(null,204);
    }
}
