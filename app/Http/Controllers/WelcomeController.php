<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Seo;
use App\Category;
use App\Models\Contact;
use App\Portfolio;
use App\Models\Service;
use App\Models\Softskill;
use App\Models\Job;
use App\Models\Resume;
use App\Models\Setting;
use App\Skill;
use App\Social;
use App\Subscriber;
use App\Models\Tagline;
use App\Testimonial;
use DB;
use Newsletter;
use App\Lang;
use  Artesaos\SEOTools\Facades\SEOTools;

class WelcomeController extends Controller
{

    public function welcome()
	{

      
      try {
          DB::connection()->getPdo();
        if(DB::connection()->getDatabaseName()){
     
        $settings=Setting::first();
     

        return view('welcome',compact('settings'));
        }else{
            return redirect()->route('install');
        }
        } catch (\Exception $e) {
            return redirect()->route('install');
        } 

    }



    public function home()
    {
        // $bg_img = Setting::select('home_img')->first();
        $tagline = Tagline::select('tag_line', 'id', 'image')->get();
        // $socials = Social::select('icon', 'link')->latest()->get();
        return response()->json(['tagline' => $tagline]);
    }

    public function about()
    {
        $about = About::select('description', 'cv', 'image')->first();
        // $skill = Skill::select('name', 'percent')->get();
        return response()->json(['about' => $about]);
    }

    public function service()
    {

        // $service_settings = Setting::select('service_description', 'service_img')->first();
        $services = Service::select('icon', 'title', 'description')->get();
        return response()->json(['services' => $services]);

    }

    public function contact()
    {
        //  $settings=Setting::select('contact_description')->first();
        $contacts = Contact::select('phone', 'email', 'address')->first();
        return response()->json(['contacts' => $contacts]);

    }

    public function resume()
    {
        $Resume = Resume::select('edutitle', 'univerisity', 'description', 'sessions')->first();
        $skill = Skill::select('name', 'percent')->get();
        $softskill = Softskill::select('softskillname', 'softskillrating')->get();
        $Jobs = Job::select('exptitle', 'expmarketplace', 'expdescription', 'expsession')->get();
    }

    public function settings()
    {
        $settings = Setting::select('webtitle', 'facebook', 'twitter', 'youtube', 'instagram', 'cv')->first();
        return response()->json(['settings' => $settings]);
    }
}
