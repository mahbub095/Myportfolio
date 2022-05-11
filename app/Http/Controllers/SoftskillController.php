<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Skill;
use Illuminate\Http\Request;
use App\Models\Softskill;

class SoftskillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $softskills = Softskill::paginate(15);
        return view('backend.soft.index', compact('softskills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.soft.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $softskill = new Softskill();
        $softskill->softskillname = $request->softskillname;
        $softskill->softskillrating = $request->softskillrating;
        $softskill->save();
        $notification = array(
            'message' => 'soft Created',
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
        $info = Softskill::find($id);
        return view('backend.soft.edit', compact('info'));
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
            'softskillname' => 'required|max:15',
            'softskillrating' => 'required',
        ]);
        $softskill = Softskill::find($id);
        $softskill->softskillname = $request->softskillname;
        $softskill->softskillrating = $request->softskillrating;
        $softskill->save();
        $notification = array(
            'message' => 'Soft skill Updated',
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
        Softskill::destroy($id);
        $notification = array(
            'message' => 'Skill Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
