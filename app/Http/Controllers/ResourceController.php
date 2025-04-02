<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promosi;
use Brick\Math\BigInteger;

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
       $title =$request->title;
       $description = $request->description;
       Promosi::create([
            'title' => $title,
            'description' => $description,
        ]);

        return redirect()->route('promosi.index');
    }

    // Menampilkan form untuk mengedit promosi
    public function edit($id)
    {
        $mode = "EDIT";
        $promo = Promosi::where('id', $id)->firstOrFail();
        return view('promosi.edit', [
            "mode" => $mode,
            "promo" => $promo,
        ]);
    }

    // Memperbarui data promosi
    public function update(Request $request, $id)
    {
        $title = $request->title;
        $description = $request->description;
        Promosi::where('id', $id)->update([
            'title' => $title,
            'description' => $description,
        ]);

        return redirect()->route('promosi.index');
    }

    // Menghapus promosi
    public function destroy($id)
    {
        Promosi::where('id', $id)->delete();
        return redirect()->route('promosi.index');
    }
}