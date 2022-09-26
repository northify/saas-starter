<?php

namespace App\Http\Controllers\Marketing\Create;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marketing\LandingPage;
use App\Models\Marketing\CreatePage;

class IndexController extends Controller
{

    /**
     * Create Page index.
     */
    public function index($slug)
    {
        $meta = collect(LandingPage::getMetaData())->first();
        $nav = collect(LandingPage::getNavigationData())->first();
        $content = collect(CreatePage::getContentData())->where('slug', $slug)->first();
        $testimonials = collect(LandingPage::getTestimonialData())->first();
        $footer = collect(LandingPage::getFooterData())->first();
        //Return page data
        return view('Marketing.Create.Index.index', compact('meta', 'nav', 'content', 'testimonials', 'footer'));
    }

}