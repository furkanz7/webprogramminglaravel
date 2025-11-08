<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function about()
    {
        return 'This is the about page.';
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact()
    {
        return 'Contact form submitted!';
    }
}
