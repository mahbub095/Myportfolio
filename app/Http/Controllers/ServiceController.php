<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Service;

use DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $services=Service::latest()->get();
          return view('backend.service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
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
            'title' => 'required|max:50',
            'description' => 'required|max:100',
            'file' => 'required|image'
        ]);

        if ($request->file) {

            $imageName = time() . '.' . request()->file->getClientOriginalExtension();
            request()->file->move('uploads/', $imageName);
            $file = 'uploads/' . $imageName;
        }
        $Services = new Service();
        $Services->title = $request->title;
        $Services->description = $request->description;
          $Services->icon = $file;


        $Services->save();
        $notification = array(
            'message' => 'Service Created',
            'alert-type' => 'success'
        );
        // $Services = $request->all();
        // Service::create($Services);
        // $notification = array(
        //     'message' => 'Service Created',
        //     'alert-type' => 'success'
        // );
        return back()->with($notification);
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
        $info = Service::find($id);
        return view('backend.service.edit', compact('info'));
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
            'title' => 'required|max:20',
            'description' => 'required|max:100',
            'file' => 'image'
        ]);
        $info = Service::find($id);
        $Services = Service::find($id);
        if ($request->file) {

            $imageName = time() . '.' . request()->file->getClientOriginalExtension();
            request()->file->move('uploads/', $imageName);
            $file = 'uploads/' . $imageName;
            if (file_exists($info->icon)) {
                unlink($info->icon);
            }
            $Services->icon = $file;
        }

        $Services->title = $request->title;
        $Services->description = $request->description;



        $Services->save();
        $notification = array(
            'message' => 'Service Updated',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Service::find($id);
        if (file_exists($info->icon)) {
            unlink($info->icon);
        }
        Service::destroy($id);
        $notification = array(
            'message' => 'Service Destroyed',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
