<?php 
$message = "hi";
  $ctx = stream_context_create();
  stream_context_set_option($ctx, 'ssl', 'local_cert', getcwd().'/getserviced-final-apns-dev.pem');
  stream_context_set_option($ctx, 'ssl', 'passphrase', 'Mindbowser123');
  $fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195',
  $err,$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

  if (!$fp)
  exit("Failed to connect: $err $errstr" . PHP_EOL);
   
  
   $deviceToken=trim("5f620d1bfbd92d3a8e64e92b535178f17e89334b273af82715daae86959a00ba");
   ////////////////////////////////////////////////////////////////////////////////

    

   // Open a connection to the APNS server
    

   // Create the payload body
   $body['aps'] = array(
     'alert' => $message
     );

     // Encode the payload as JSON
     $payload = json_encode($body);

     // Build the binary notification
     $msg = chr(o) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

     // Send it to the server
     $result = fwrite($fp, $msg, strlen($msg));
    echo $result;
 /*if (!$result)
  $txt_msg= '<div style="color:#FF0000;">Message not delivered</div>' . PHP_EOL;
  else*/

 // Close the connection to the server
 fclose($fp);
?>