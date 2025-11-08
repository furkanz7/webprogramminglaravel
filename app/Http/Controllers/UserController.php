<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Displaying all users from the controller.';
    }

    public function show(string $id)
    {
        return 'Displaying profile for User ID: ' . $id . ' from the controller.';
    }
}
