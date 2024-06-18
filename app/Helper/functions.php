<?php

function upload_image($image_name, $public_file = 'resized')
{
    if (isset($image_name) and !empty($image_name)) {
        $imageName = time().'.'.$image_name->extension();
        $image_name->move(public_path($public_file), $imageName);
        return $imageName;
    }
    return null;
}

function sendFarazSms($to,$pattern="rkc7c7t4avkjsce", $variabels=array()) {
// turn off the WSDL cache
    $client = new SoapClient("http://ippanel.com/class/sms/wsdlservice/server.php?wsdl");
    $user = "U09152260014";
    $pass = "Erfan1387";
    $fromNum = "+9850002040000000";
    $toNum = "$to";
    $pattern_code = "$pattern";
    $input_data = $variabels;

    return $client->sendPatternSms($fromNum,$toNum,$user,$pass,$pattern_code,$input_data);
}


