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
        $meta = collect(LandingPage::getMetaData())->first();
        $nav = collect(LandingPage::getNavigationData())->first();
        $content = collect(LandingPage::getPricingData())->first();
        $faqs = collect(LandingPage::getFaqData())->first();
        $footer = collect(LandingPage::getFooterData())->first();
        // Return page data
        return view('Marketing.Landing.Pricing.index', compact('meta', 'nav', 'content', 'faqs', 'footer'));

    }

}