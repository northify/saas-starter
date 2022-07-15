<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marketing\LandingPage;

class PricingController extends Controller
{

    /**
     * Northify Landing Page.
     */
    public function pricing()
    {
        // Get page data
        $meta = collect(LandingPage::getMetaData())->first();
        $nav = collect(LandingPage::getNavigationData())->first();
        $content = collect(LandingPage::getContentData())->first();
        $footer = collect(LandingPage::getFooterData())->first();
        // Return page data
        return view('Landing.Pricing.index', compact('meta', 'nav', 'content', 'footer'));

    }

}