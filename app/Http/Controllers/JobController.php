<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::paginate(15);
//         return view('backend.Job.index',compact('jobs'));
//        return view('backend.Job.index',['jobs'=>$jobs]);
        return view('backend.Job.index')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Jobs = new Job();
        $Jobs->exptitle = $request->exptitle;
        $Jobs->expmarketplace = $request->expmarketplace;
        $Jobs->expdescription = $request->expdescription;
        $Jobs->expsession = $request->expsession;
        $Jobs->save();
        $notification = array(
            'message' => 'JObs Created',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Job::find($id);
        return view('backend.job.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'exptitle' => 'required|max:15',
            'expmarketplace' => 'required',
            'expdescription' => 'required',
            'expsession' => 'required',
        ]);
        $Jobs = Job::find($id);
        $Jobs->exptitle = $request->exptitle;
        $Jobs->expmarketplace = $request->expmarketplace;
        $Jobs->expdescription = $request->expdescription;
        $Jobs->expsession = $request->expsession;
        $Jobs->save();
        $notification = array(
            'message' => 'Jobs Updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::destroy($id);
        $notification = array(
            'message' => 'Jobs Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
