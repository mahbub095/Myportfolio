<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
         $jobs=Job::all();
//         return view('backend.Job.index',compact('jobs'));
//        return view('backend.Job.index',['jobs'=>$jobs]);
        return view('backend.Job.index')->with('jobs',$jobs);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Jobs=new Job();
        $Jobs->exptitle=$request->exptitle;
        $Jobs->expmarketplace=$request->expmarketplace;
        $Jobs->expdescription=$request->expdescription;
        $Jobs->expsession=$request->expsession;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validatedData = $request->validate([
            'name' => 'required|max:15',
            'percent' => 'required',
        ]);
        $Jobs= Job::find($id);
        $Jobs->name=$request->name;
        $Jobs->percent=$request->percent;
        $Jobs->save();
        $notification = array(
            'message' => 'Job Updated',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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
