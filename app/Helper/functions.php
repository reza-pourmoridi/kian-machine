<?php

use Illuminate\Support\Facades\Log;
use Intervention\Image\Laravel\Facades\Image;

function upload_image($image_file, $public_file = 'resized', $max_size = 400)
{
    ini_set('upload_max_filesize', '20M');
    ini_set('post_max_size', '20M');


    try {
        $image = Image::read($image_file);

        // Get original dimensions
        $originalWidth = $image->width();
        $originalHeight = $image->height();

        // Calculate new dimensions
        if ($originalWidth > $originalHeight) {
            $newWidth = $max_size;
            $newHeight = ($originalHeight / $originalWidth) * $newWidth;
        } else {
            $newHeight = $max_size;
            $newWidth = ($originalWidth / $originalHeight) * $newHeight;
        }

        // Resize image
        $image->resize($newWidth, $newHeight);

        // Generate new image name and save path
        $imageName = time() . '.' . $image_file->extension();
        $destinationPath = public_path($public_file);

        // Save the resized image
        if ($image->save($destinationPath .'/'. $imageName)) {
            return $imageName;
        } else {
            throw new \Exception('Failed to save the image.');
        }
    } catch (\Exception $e) {
        // Log the error message
        Log::error('Image upload error: ' . $e->getMessage());

        // Return an error message
        dd(response()->json(['error5' => $e->getMessage()], 500));
    }
}


function sendFarazSms($to,$pattern="rkc7c7t4avkjsce", $variabels=array()) {
// turn off the WSDL cache
    $client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");
    $user = "U09152260014";
    $pass = "Erfan1387";
    $fromNum = "+983000505";
    $toNum = "$to";
    $pattern_code = "$pattern";
    $input_data = $variabels;

    return $client->sendPatternSms($fromNum,$toNum,$user,$pass,$pattern_code,$input_data);
}


