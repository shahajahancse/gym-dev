<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Offer;
use App\Models\Package_class;
use App\Models\SiteFeature;
use App\Models\SiteProfile;
use App\Models\SiteTrainer;

class HomeController extends Controller
{
    public function index()
    {
        // $SiteProfile = SiteProfile::first();
        // $AboutUs     = AboutUs::first();
        // $SiteFeature = SiteFeature::all();
        // $SiteTrainer = SiteTrainer::all();
        // $offers      = Offer::where('status', 1)->get();
        // $classes     = Package_class::where('status', 1)->get();
        return view( 'frontend.index');
    }

    public function about_us()
    {
        return view( 'frontend.about_us');
    }

    public function service()
    {
        return view( 'frontend.service' );
    }

    public function trainer()
    {
        return view( 'frontend.trainer' );
    }

    public function membership()
    {
        return view( 'frontend.membership' );
    }

    public function blogs()
    {
        return view( 'frontend.blogs' );
    }

    public function contact()
    {
        return view( 'frontend.contact' );
    }

    public function privacy_policy()
    {
        return view( 'frontend.pages.privacy_policy' );
    }

    public function terms_conditions()
    {
        return view( 'frontend.pages.terms_conditions' );
    }

    public function cookie_policy()
    {
        return view( 'frontend.pages.cookie_policy' );
    }
}
