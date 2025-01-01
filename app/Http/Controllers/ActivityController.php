<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    // Main activities page
    public function index()
    {
        return view('activities.activities'); // Main activities view
    }

    // Infants page
    public function infants()
    {
        return view('activities.infants'); // View for 0-12 months
    }

    // Toddlers page
    public function toddlers()
    {
        return view('activities.toddlers'); // View for 1-3 years old
    }

    // Preschoolers page
    public function preschoolers()
    {
        return view('activities.preschoolers'); // View for 3-5 years old
    }

    // School-aged children page
    public function schoolAged()
    {
        return view('activities.schoolAged'); // View for 6-12 years old
    }
}
