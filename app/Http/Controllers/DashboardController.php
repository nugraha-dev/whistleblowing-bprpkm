<?php

namespace App\Http\Controllers;

use App\Models\WhistleblowingModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari WhistleblowingModel
        $data = WhistleblowingModel::paginate(10);

        // dd($data);

        // Mengirim data ke tampilan
        return view('dashboard', compact('data'));
    }

    // Menampilkan detail data
    public function show($id)
    {
        $data = WhistleblowingModel::findOrFail($id);
        return view('whistleblowing', compact('data'));
    }
}
