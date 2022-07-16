<?php

namespace App\Http\Controllers\Marketing\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marketing\LandingPage;

class PricingController extends Controller
{

    /**
     * Landing Pricing.
     */
    public function pricing()
    {
        // Get page data
        $meta = LandingPage::getPricingData();
        $test = collect($meta['meta']);
        dd($test);
        $nav = collect(LandingPage::getNavigationData())->first();
        $content = collect(LandingPage::getPricingData()[1]);
        $footer = collect(LandingPage::getFooterData())->first();
        // Return page data
        return view('Marketing.Landing.Pricing.index', compact('meta', 'nav', 'content', 'footer'));

    }

}