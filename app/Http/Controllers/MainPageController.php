<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class MainPageController extends Controller
{
    // Main Page
    public function showMainPage()
    {
        return view('main'); // Ensure the 'mainpage.blade.php' file exists in resources/views
    }


    // Profile Page
    public function profile()
    {
        return view('profile'); // Ensure the 'profile.blade.php' file exists in resources/views
    }


    // Settings Page
    public function settings()
    {
        return view('settings'); // Ensure the 'settings.blade.php' file exists in resources/views
    }

    // Logout Functionality
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); // Redirect to the home page or login page
    }
}
