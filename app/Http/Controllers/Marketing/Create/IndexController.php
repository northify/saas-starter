<?php

namespace App\Http\Controllers\Marketing\Create;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marketing\LandingPage;
use App\Models\Marketing\CreatePage;

class IndexController extends Controller
{

    /**
     * Landing Page index.
     */
    // public function index()
    // {
    //     // Get page data
    //     $meta = collect(LandingPage::getMetaData())->first();
    //     $nav = collect(LandingPage::getNavigationData())->first();
    //     $content = collect(LandingPage::getIndexData())->first();
    //     $footer = collect(LandingPage::getFooterData())->first();
    //     // Return page data
    //     return view('Marketing.Landing.Index.index', compact('meta', 'nav', 'content', 'footer'));

    // }

    /**
     * SEO - Wordpress Facebook Live - Landing Page
     */
    public function index($slug)
    {
        $meta = collect(LandingPage::getMetaData())->first();
        
        $nav = collect(LandingPage::getNavigationData())->first();
        
        $content = collect(CreatePage::getContentData())->where('slug', $slug)->first();
        $testimonials = collect(CreatePage::getContentData())->where('testimonials', 'testimonials')->first();


        $footer = collect(LandingPage::getFooterData())->first();
        //Return page data
        return view('Marketing.Create.Index.index', compact('meta', 'nav', 'content', 'testimonials', 'footer'));
        
    }

}