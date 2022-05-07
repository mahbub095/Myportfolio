<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tagline;
use DB;

class TaglineController extends Controller
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
        $taglines = Tagline::first();
        return view('backend.Intro.create', compact('taglines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

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
            'tag_line' => 'required',
            'description' => 'required',

        ]);
        $Tagline = Tagline::first();

        if ($request->hasFile('image')) {

            $cvname = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move('uploads/', $cvname);
            $cv = 'uploads/' . $cvname;

            if (file_exists($Tagline->image)) {
                unlink($Tagline->image);
            }
        } else {
            $cv = $Tagline->image;
        }


        $Tagline->tag_line = $request->tag_line;
        $Tagline->description = $request->description;


        DB::table('taglines')->update([
            'tag_line' => $request->tag_line,
            'description' => $request->description,
            'image' => $cv,
        ]);

        $notification = array(
            'message' => 'Tagline Update',
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
        //
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tagline::destroy($id);
        $notification = array(
            'message' => 'Tagline Destroy',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
