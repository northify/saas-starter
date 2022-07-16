<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;
use Storage;

class LandingPage extends Model
{
    /**
     * Get Meta data.
     */
    public static function getMetaData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/metaData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }

    /**
     * Get Navigation data.
     */
    public static function getNavigationData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/navigationData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }

    /**
     * Get Index data.
     */
    public static function getIndexData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/IndexData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }

    /**
     * Get Products data.
     */
    public static function getProductData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/productData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }

    /**
     * Get Pricing data.
     */
    public static function getPricingData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/pricingData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }

    /**
     * Get Help Center data.
     */
    public static function getHelpCenterData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/helpCenterData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }

    /**
     * Get Testimonials data.
     */
    public static function getTestimonialData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/testimonialData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }

    /**
     * Get Privacy data.
     */
    public static function getPrivacyData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/privacyData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }

    /**
     * Get Terms data.
     */
    public static function getTermsData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/termsData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }

    /**
     * Get Footer data.
     */
    public static function getFooterData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/footerData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }
}
