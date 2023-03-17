<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Job::get();
        return view('backend.jobs.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Job();
        $url = url('sales-and-inventory-system/jobs/create');
        $title = "Insert Record";
        return view('backend.jobs.create',['url' => $url,'title' => $title,'data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required',
            'salary' => 'required'
        ]);
        $obj = new Job();
        $obj->job_title = $request->input('job_title');
        $obj->salary = $request->input('salary');
        $obj->save();
        return redirect('sales-and-inventory-system/jobs/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Job::find($id);
        $url = url('sales-and-inventory-system/jobs/update') . "/" . $id;
        $title = "Edit Record";
        return view('backend.jobs.create',['url' => $url,'title' => $title,'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'job_title' => 'required',
            'salary' => 'required'
        ]);
        $obj = Job::find($id);
        $obj->job_title = $request->input('job_title');
        $obj->salary = $request->input('salary');
        $obj->save();
        return redirect('sales-and-inventory-system/jobs/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
