<?php

namespace App\Http\Controllers;

use App\Mail\WhistleblowingSystem;
use App\Models\WhistleblowingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function Laravel\Prompts\error;

class WhistlebowingsystemController extends Controller
{
    public function sendWhistleblowingEmail(Request $request)
    {
        $request->validate([
            'pic' => 'required|string',
            'cabang' => 'required|string',
            'perihal' => 'required|string',
            'attachment' => 'nullable|file|max:5120' // Optional file upload
        ]);

        $details = [
            'pic' => $request->pic,
            'cabang' => $request->cabang,
            'perihal' => $request->perihal,
        ];

        try {
            $fileName = null;

            // Handle file attachment if present
            if ($request->hasFile('attachment')) {
                // dd('ada file');

                // Mendapatkan file yang diupload
                $file = $request->file('attachment');

                // Menentukan nama file yang akan digunakan
                $fileName = time() . '_' . $file->getClientOriginalName();

                // Menentukan path tempat file akan disimpan (misalnya di folder 'uploads/whistleblowing')
                $filePath = 'uploads/whistleblowing';

                // Memindahkan file ke folder tujuan dan menyimpan path file
                $file->move($filePath, $fileName);

                // Add attachment details to the $details array
                $details['attachment'] = [
                    'file' => $filePath . '/' . $fileName,
                    'name' => $fileName
                ];
            }

            WhistleblowingModel::create(
                [
                    'pic' => $request->pic,
                    'cabang' => $request->cabang,
                    'file' => $fileName,
                    'perihal' => $request->perihal,
                ]
            );


            Mail::to('gulam@resolusiweb.com')->send(new WhistleblowingSystem($details));
            return redirect()->back()->with('success', "Berhasil mengirim laporan");
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors($th->getMessage());
        }
    }
}
