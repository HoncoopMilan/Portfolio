<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        // Store the uploaded image
        $imagePath = $request->file('image')->store('uploads', 'public');

        // Create a new image record in the database (if needed)
        // You can use Eloquent to store the image path in a database table.

        // Redirect back or to a success page
        return back()->with('success', 'Image uploaded successfully');
    }
}