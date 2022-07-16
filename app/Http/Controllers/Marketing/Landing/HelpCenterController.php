<?php

namespace App\Http\Controllers\Marketing\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marketing\LandingPage;

class HelpCenterController extends Controller
{

    /**
     * Help Center.
     */
    public function helpCenter()
    {
        // Get page data
        $meta = collect(LandingPage::getMetaData())->first();
        $nav = collect(LandingPage::getNavigationData())->first();
        $content = collect(LandingPage::getHelpCenterData())->first();
        $footer = collect(LandingPage::getFooterData())->first();
        // Return page data
        return view('Marketing.Landing.HelpCenter.index', compact('meta', 'nav', 'content', 'footer'));

    }

}