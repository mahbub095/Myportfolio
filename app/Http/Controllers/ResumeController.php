<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Skill;
use Illuminate\Http\Request;
use DB;
use App\Models\Resume;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        $resumes = Resume::latest()->get();
        $resumes = Resume::paginate(14);
        return view('backend.resume.index', compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'edutitle' => 'required|max:50',
            'univerisity' => 'required|max:100',

        ]);

        if ($request->file) {

            $imageName = time() . '.' . request()->file->getClientOriginalExtension();
            request()->file->move('uploads/', $imageName);
            $file = 'uploads/' . $imageName;
        }
        $Resume = new Resume;
        $Resume->edutitle = $request->edutitle;
        $Resume->univerisity = $request->univerisity;
        $Resume->description = $request->description;
//        $Resume->image=$file;
        $Resume->sessions = $request->sessions;


        $Resume->save();
        $notification = array(
            'message' => 'Service Created',
            'alert-type' => 'success'
        );

        return back()->with($notification);
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
        $info = Resume::find($id);
        return view('backend.resume.edit', compact('info'));
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
            'edutitle' => 'required|max:20',
            'univerisity' => 'required|max:100',
            'description' => 'required|max:100',
            'sessions' => 'required|max:100',

        ]);

        $Resume = Resume::find($id);


        $Resume->edutitle = $request->edutitle;
        $Resume->univerisity = $request->univerisity;
        $Resume->description = $request->description;
        $Resume->sessions = $request->sessions;


        $Resume->save();
        $notification = array(
            'message' => 'Resumes Updated',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Resume::find($id);
        if (file_exists($info->icon)) {
            unlink($info->icon);
        }
        Resume::destroy($id);
        $notification = array(
            'message' => 'Resume Destroyed',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
