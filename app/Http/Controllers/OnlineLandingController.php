<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineLandingController extends Controller
{
    public function show($slug)
    {
        // Optional: You can map slugs to specific views or data
        $validSlugs = ['manipal', 'sikkim', 'gla', 'lpu', 'amity'];

        if (!in_array($slug, $validSlugs)) {
            abort(404); // Show 404 if slug doesn't match
        }

        return view("landing-pages.$slug"); // Views stored in /resources/views/landing-pages/
    }
}

