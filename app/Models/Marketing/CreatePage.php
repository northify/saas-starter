<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;
use Storage;

class CreatePage extends Model
{


    /**
     * Get Meta data.
     */
    public static function getContentData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('create/content.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);

        return $json;
    }


    public static function getTestimonialData()
    {
        
        // Get json data file
        $json = Storage::disk('marketing')->get('testimonials.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);

        return $json;

         
    }

}
