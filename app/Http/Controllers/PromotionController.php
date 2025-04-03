<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = Promotion::latest()->paginate(10);
        return view('promotions.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('promo-images', 'public');
            $validated['image'] = $imagePath;
        }

        Promotion::create($validated);

        return redirect()->route('promotions.index')
                       ->with('success', 'Promotion created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Promotion $promotion)
    {
        return view('promotions.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Promotion $promotion)
    {
        return view('promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Promotion $promotion)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama
            Storage::disk('public')->delete($promotion->image);
            
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('promo-images', 'public');
            $validated['image'] = $imagePath;
        }

        $promotion->update($validated);

        return redirect()->route('promotions.index')
                       ->with('success', 'Promotion updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Promotion $promotion)
    {
        // Hapus gambar dari storage
        Storage::disk('public')->delete($promotion->image);
        
        $promotion->delete();

        return redirect()->route('promotions.index')
                       ->with('success', 'Promotion deleted successfully!');
    }
}