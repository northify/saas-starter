<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    /**
     * Northify Landing Page.
     */
    public function index()
    {
        return view('Landing.Index.index');
    }

}