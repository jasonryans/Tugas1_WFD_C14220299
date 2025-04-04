<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{
    public function index($filePath)
    {
        // Mengambil file dari storage
        $path = "public/".$filePath;

        // Mengecek apakah file ada
        if (!Storage::exists($path)) {
            abort(404);
        }

        // Mengembalikan file sebagai response
        return response(Storage::get($path), 200)->
        header("Content-Type", Storage::mimeType($path));
    }
}
