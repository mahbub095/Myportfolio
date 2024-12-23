<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Skill;
use Facade\FlareClient\View;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $skills = Skill::latest()->get();
        //  return view('backend.skill.index',compact('skills'));


        // get all the sharks
        $skills = Skill::paginate(17);

        // load the view and pass the sharks
        return View('backend.skill.index', compact('skills'));
        // ->with('sharks', $sharks);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:skills|max:15',
            'percent' => 'required',
        ]);
        $skill = new Skill;
        $skill->name = $request->name;
        $skill->percent = $request->percent;
        $skill->save();
        $notification = array(
            'message' => 'Skill Created',
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
        $info = Skill::find($id);
        return view('backend.skill.edit', compact('info'));
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
        $skill = Skill::find($id);
        $skill->name = $request->name;
        $skill->percent = $request->percent;
        $skill->save();
        $notification = array(
            'message' => 'Skill Updated',
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
        Skill::destroy($id);
        $notification = array(
            'message' => 'Skill Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
