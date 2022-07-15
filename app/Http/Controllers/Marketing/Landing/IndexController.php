<?php

namespace App\Http\Controllers\Marketing\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marketing\LandingPage;

class IndexController extends Controller
{

    /**
     * Landing Page index.
     */
    public function index()
    {
        // Get page data
        $meta = collect(LandingPage::getMetaData())->first();
        $nav = collect(LandingPage::getNavigationData())->first();
        $content = collect(LandingPage::getContentData())->first();
        $footer = collect(LandingPage::getFooterData())->first();
        // Return page data
        return view('Marketing.Landing.Index.index', compact('meta', 'nav', 'content', 'footer'));

    }

}