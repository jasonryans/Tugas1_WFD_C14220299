<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promosi;

class ResourceController extends Controller
{
    // Menampilkan daftar promosi
    public function index()
    {
        $promotions = Promosi::all(['id', 'title', 'description', 'image']);
        return view('promosi.homepage', [
            "promotions" => $promotions
        ]);
    }

    // Menampilkan detail promosi
    public function show($id)
    {
        $promo = Promosi::where('id', $id)->firstOrFail();
        return view('promosi.show', [
            "promo" => $promo,
        ]);
    }

    // Menampilkan form untuk menambah promosi
    public function create()
    {
        $mode = "ADD";
        return view('promosi.create', [
            "mode" => $mode
        ]);
    }

    // Menyimpan data promosi baru
    public function store(Request $request)
    {
    
        $validated = $request->validate ([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif'         
        ]);

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store("public"); 
            $filePath = basename($filePath);
        }

        // Save other data to the database
        Promosi::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $filePath
        ]);

        // dd($validated);
        // dd('Store function reached!');


        return redirect()->route('promosi.index')->with('success', 'Promosi created successfully!');
    }

    // Menampilkan form untuk mengedit promosi
    public function edit($id)
    {        
        $promo = Promosi::where('id', $id)->firstOrFail();
        // dd($promo);
        return view('promosi.edit', compact('promo'));
        
    }

    // Memperbarui data promosi
    public function update(Request $request, $id) 
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);

        // dd($validatedData);
        $promo = Promosi::findOrFail($id);
        $promo->title = $validatedData['title'];
        $promo->description = $validatedData['description'];
        $promo->image = $validatedData['image'];

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store("public");
            $filePath = basename($filePath);
            $promo->image = $filePath;
        }

        $promo->save();
        // dd($promo);


        // Redirect with success message
        return redirect()->route('promosi.index')->with('success', 'Promo edited successfully!');
    }

    // Menghapus promosi
    public function destroy($id)
    {
        Promosi::where('id', $id)->delete();
        return redirect()->route('promosi.index');
    }
}