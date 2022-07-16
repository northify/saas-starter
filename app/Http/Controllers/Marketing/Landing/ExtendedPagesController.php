<?php

namespace App\Http\Controllers\Marketing\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marketing\LandingPage;

class ExtendedPagesController extends Controller
{

    /**
     * Landing Testimonials.
     */
    public function testimonials()
    {
        // Get page data
        $meta = collect(LandingPage::getMetaData())->first();
        $nav = collect(LandingPage::getNavigationData())->first();
        $content = collect(LandingPage::getTestimonialData())->first();
        $footer = collect(LandingPage::getFooterData())->first();
        // Return page data
        return view('Marketing.Landing.Testimonials.index', compact('meta', 'nav', 'content', 'footer'));

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
        return view('Marketing.Landing.Privacy.index', compact('meta', 'nav', 'content', 'footer'));

    }

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
        return view('Marketing.Landing.Terms.index', compact('meta', 'nav', 'content', 'footer'));

    }

}