<?php
/*
This example works only for those users which are using Cloud Service and do not want to run
client application on their end.


You just need to Start the Cloud Service from the Dashboard and Scan QR Code.
When WhatsApp gets ready, then you can start sending messages.

*/

include('WhatsappAPI.php'); // include given API file


$wp = new WhatsappAPI("3007", "bf40362c4253418cd8b483e335b4c76344b568cb"); // create an object of the WhatsappAPI class with your user id and api key


  $number = "$row"; // NOTE: Phone Number should be with country code
  $message = "$data['pesan']"; // You can use WhatsApp Code to compose text messages like *bold*, ~Strikethrough~, ```Monospace```
  $media_url = 'http://www.africau.edu/images/default/sample.pdf';  //Direct global accessible URL of the file, image, docs etc.
  // Max file size should be 10MB otherwise you may get error.
  $group_name = 'My Test Group 😋';
  $caption = 'Its my Caption';  //For media files
  
  
  
  /*
  
  UNCOMMENT YOUR REQUIRED FUNCTIONS FROM BELOW
  
  */
  
  // Send Text Message to number
  $status = $wp->sendText($number, $message);


// Send PDF, Documents, File, Images etc  Message to number
$status = $wp->sendFromURL($number, $media_url, $caption);

// Send Text message in Group
$status = $wp->sendTextInGroup($group_name, $message);
// Send Media message in Group
$status = $wp->sendFromURLInGroup($group_name, $media_url, $caption);

$status = json_decode($status);

if($status->status == 'error'){
    echo $status->response;
}elseif($status->status == 'success'){
    echo 'Success <br />';
    echo $status->response;
}else{
  print_r($status);
}
?>
