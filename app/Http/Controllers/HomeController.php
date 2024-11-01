<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Array of memories with associated images and messages
        $memories = [
            ['image' => 'path_to_your_photo1.jpg', 'message' => 'Our first date!'],
            ['image' => 'path_to_your_photo2.jpg', 'message' => 'Trip to the beach!'],
            // Add more memories here...
        ];
        
        // Pass memories to the view
        return view('welcome', ['memories' => $memories]);
    }
}
