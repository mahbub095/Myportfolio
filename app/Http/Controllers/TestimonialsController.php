<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Testimonials;

class TestimonialsController extends Controller
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
        $testimonials = Testimonials::latest()->get();
        return view('backend.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonials.create');
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
            'name' => 'required|max:50',
            'description' => 'required|max:100',
            'file' => 'required|image'
        ]);

        if ($request->file) {

            $imageName = time() . '.' . request()->file->getClientOriginalExtension();
            request()->file->move('uploads/', $imageName);
            $file = 'uploads/' . $imageName;


        }
        $testimonial = new Testimonials;
        $testimonial->name = $request->name;
        $testimonial->desination = $request->desination;
        $testimonial->description = $request->description;
        $testimonial->image = $file;


        $testimonial->save();
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


        $validatedData = $request->validate([
            'title' => 'required|max:20',
            'description' => 'required|max:100',
            'file' => 'image'
        ]);
        $info = Testimonials::find($id);
        $testimonial = Testimonials::find($id);
        if ($request->file) {

            $imageName = time() . '.' . request()->file->getClientOriginalExtension();
            request()->file->move('uploads/', $imageName);
            $file = 'uploads/' . $imageName;
            if (file_exists($info->icon)) {
                unlink($info->icon);
            }
            $testimonial->icon = $file;

        }

        $testimonial->name = $request->title;
        $testimonial->desination = $request->desination;
        $testimonial->description = $request->description;


        $testimonial->save();
        $notification = array(
            'message' => 'Service Updated',
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
        $info = Testimonials::find($id);
        if (file_exists($info->icon)) {
            unlink($info->icon);
        }
        Testimonials::destroy($id);
        $notification = array(
            'message' => 'Service Destroyed',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
