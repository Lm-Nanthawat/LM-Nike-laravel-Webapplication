<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shoe;

class AdminShoesController extends Controller
{
    public function showAdminShoes()
    {
        return view('admin.shoes');
    }

    public function postAdminShoes(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category' => 'required|string',
            'image_url' => 'nullable|url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle the file upload
        $imagePath = null;
        if ($request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('images', 'public');
        }

        // Create a new shoe
        Shoe::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'image_url' => $request->image_url,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('adminShoes')->with('success', 'Shoe added successfully!');
    }
}
                      