<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Setting;
use Illuminate\Http\Request;

use DB;

class SettingController extends Controller
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
        try {
            DB::connection()->getPdo();
            if (DB::connection()->getDatabaseName()) {
                $settings = Setting::first();

                return view('backend.settings', compact('settings'));

            } else {
                return redirect()->route('install');
            }
        } catch (\Exception $e) {
            return redirect()->route('install');
        }

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
            'webtitle' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',

        ]);
        $settings = Setting::first();
        if ($request->hasFile('cv')) {

            $cvname = time() . '.' . request()->cv->getClientOriginalExtension();
            request()->cv->move('uploads/', $cvname);
            $cv = 'uploads/' . $cvname;

            if (file_exists($settings->cv)) {
                unlink($settings->cv);
            }
        } else {
            $cv = $settings->cv;
        }
        //image upload
        if ($request->file) {

            $imageName = time() . '.' . request()->file->getClientOriginalExtension();
            request()->file->move('uploads/', $imageName);
            $file = 'uploads/' . $imageName;
        }

        $settings->webtitle = $request->webtitle;
        $settings->facebook = $request->facebook;
        $settings->twitter = $request->twitter;
        $settings->youtube = $request->youtube;
        $settings->instagram = $request->instagram;
        $settings->image = $file;
        DB::table('settings')->update([
            'webtitle' => $request->webtitle,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'instagram' => $request->instagram,
            'cv' => $cv,
            'image' => $file,

        ]);

        $notification = array(
            'message' => 'Setting Update',
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
        Setting::destroy($id);
        $notification = array(
            'message' => 'settings Destroy',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
