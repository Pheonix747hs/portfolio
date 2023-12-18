<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    
    public function about()
    {
        // Your logic for the 'about' view goes here
        return view('about'); // Assuming you have a Blade view named 'about.blade.php'
    }

    public function projects()
{
    // Fetch data from MongoDB using the Project model
    $cardData = Project::all();

    // Convert each item to an array
    $cardDataArray = $cardData->map(function ($item) {
        return $item->toArray();
    });

    

    // Continue with your existing code
    return view('projects', compact('cardDataArray'));
}



    public function resume()
    {
        // Your logic for the 'resume' view goes here
        return view('resume'); // Assuming you have a Blade view named 'resume.blade.php'
    }

    public function letsTalk()
    {
        // Your logic for the 'lets_talk' view goes here
        return view('lets_talk'); // Assuming you have a Blade view named 'lets_talk.blade.php'
    }
}

