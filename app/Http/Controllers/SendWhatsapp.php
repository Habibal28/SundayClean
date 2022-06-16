<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WhatsappAPI;

class SendWhatsapp extends Controller
{
    public function sendWa(Request $request){
        
        $wp = new WhatsappAPI("3007", "bf40362c4253418cd8b483e335b4c76344b568cb");
        
        $image = $request->file('image')->store('images'); //store image to storage
        // $media_url = asset("storage/$image"); //dipakai ketika sudah hosting
        $media_url = 'https://i.pinimg.com/736x/ed/90/d5/ed90d57cd4ee6befd60607777fc3c8c9.jpg';  //sementara kalau mau develop local
        $telp  =  explode(',', $request->datatelp);

        foreach($telp as $row){
            $number = "$row"; 
            $caption = "$request->pesan";
            $status = $wp->sendFromURL($number, $media_url, $caption);
        }

        $status = json_decode($status);

        if($status->status == 'error'){
            echo $status->response;
        }elseif($status->status == 'success'){
            return redirect()->back();
        }else{
        print_r($status);
        }
        
    }
}
