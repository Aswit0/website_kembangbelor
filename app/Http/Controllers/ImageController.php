<?php

namespace App\Http\Controllers;
use Filament\Http\Requests\UploadFileRequest;
use Supabase\SupabaseClient;

class ImageController extends Controller
{
//     public function upload(UploadFileRequest $request)
//     {
//         $file = $request->file('file');
//         $fileName = $file->getClientOriginalName();
//         $fileContent = file_get_contents($file->getRealPath());

//         $supabase = new SupabaseClient('SUPABASE_URL', 'SUPABASE_KEY');
//         $bucketName = 'BUCKET_NAME';
//         $response = $supabase->storage()->upload($bucketName, $fileName, $fileContent);

//         if ($response->error) {
//             // Handle error
//         }

//         // Handle success
//     }
}

