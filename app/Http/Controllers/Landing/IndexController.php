<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marketing\LandingPage;

class IndexController extends Controller
{

    /**
     * Northify Landing Page.
     */
    public function index()
    {
        // Get page data
        $meta = collect(LandingPage::getMetaData())->first();
        $nav = collect(LandingPage::getNavigationData())->first();
        $content = collect(LandingPage::getContentData())->first();
        $footer = collect(LandingPage::getFooterData())->first();
        // Return page data
        return view('Landing.Index.index', compact('meta', 'nav', 'content', 'footer'));

    }

    /**
     * Footer data for page footer
     */
    private function pageData()
    {
        
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/landingPages.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Get data per slug

        return $json;
    }

}