<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadDemo extends Controller
{
    public function storeData(Request $request) {
        $fileName = time() . "laravel-tutorial." . $request->file('fileToUpload')->getClientOriginalExtension();
        $request->file('fileToUpload')->storeAs('public/uploads', $fileName);

        $fileData = [
            'oldFileName' => $request->file('fileToUpload')->getClientOriginalName(),
            'newFileName' => $fileName
        ];

        return view('file-upload')->with('fileData', $fileData);
    }
}
