<?php

namespace App\Http\Controllers\Marketing\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marketing\LandingPage;

class LegalController extends Controller
{

    /**
     * Landing Terms.
     */
    public function terms()
    {
        // Get page data
        $meta = collect(LandingPage::getMetaData())->first();
        $nav = collect(LandingPage::getNavigationData())->first();
        $content = collect(LandingPage::getTermsData())->first();
        $footer = collect(LandingPage::getFooterData())->first();
        // Return page data
        return view('Marketing.Landing.Products.index', compact('meta', 'nav', 'content', 'footer'));
    }

    /**
     * Landing Privacy.
     */
    public function privacy()
    {
        // Get page data
        $meta = collect(LandingPage::getMetaData())->first();
        $nav = collect(LandingPage::getNavigationData())->first();
        $content = collect(LandingPage::getPrivacyData())->first();
        $footer = collect(LandingPage::getFooterData())->first();
        // Return page data
        return view('Marketing.Landing.Products.index', compact('meta', 'nav', 'content', 'footer'));
    }

}