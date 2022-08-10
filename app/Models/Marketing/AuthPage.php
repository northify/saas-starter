<?php

namespace App\Models\Marketing;

use Illuminate\Database\Eloquent\Model;
use Storage;

class AuthPage extends Model
{

    /**
     * Get Auth data.
     */
    public static function getAuthData() 
    {
        // Get json data file
        $json = Storage::disk('marketing')->get('auth/AuthData.json');
        // Get json data
        $json = json_decode($json, true);
        // Convert json to array
        $json = array_filter($json);
        // Return data
        return $json;
    }
}
