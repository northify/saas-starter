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
     * Get Content data.
     */
    public static function getContentData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('landing/ContentData.json');
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
