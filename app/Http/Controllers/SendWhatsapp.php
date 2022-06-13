<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WhatsappAPI;

class SendWhatsapp extends Controller
{
    public function sendWa(Request $request){

         $wp = new WhatsappAPI("3007", "bf40362c4253418cd8b483e335b4c76344b568cb");
        //  return $request->file('image')->store('images');

        foreach($request->data as $row){
            $number = "$row"; 
            // return $row;
            $message = "$request->pesan";
            // $media_url = 'http://www.africau.edu/images/default/sample.pdf'; 
            
            // Send Text Message to number
            $status = $wp->sendText($number, $message);
        }

        $status = json_decode($status);

        if($status->status == 'error'){
            echo $status->response;
        }elseif($status->status == 'success'){
            echo 'Success <br />';
            echo $status->response;
        }else{
        print_r($status);
        }
        
    }
}
