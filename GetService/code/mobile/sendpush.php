<?php
//FOLLOWING IS THE CODE

$deviceToken = '5f620d1bfbd92d3a8e64e92b535178f17e89334b273af82715daae86959a00ba';
$uniqueId = '0b9214ea';

$payload['aps'] = array('alert' => 'You have received message.', 'badge' => 1);
$payload['server'] = array('UniqueId' => $uniqueId);
$payload = json_encode($payload);
echo "After JSON Encode";

//*************************************
// TESTING ON WEB SERVER
//*************************************
$apnsHost = 'gateway.sandbox.push.apple.com';
$apnsPort = '2195';
$apnsCert = 'getserviced-final-apns-dev.pem';
$passPhrase = 'Mindbowser123';

echo "Creating stream object.";
$streamContext = stream_context_create();
stream_context_set_option($streamContext, 'ssl', 'local_cert', $apnsCert);
stream_context_set_option($streamContext, 'ssl', 'passphrase', $passPhrase);

try {
echo "Trying to open connection";

$apnsConnection = stream_socket_client('ssl://' . $apnsHost . ':' . $apnsPort, $error, $errorString, 60, STREAM_CLIENT_CONNECT, $streamContext);

if (apnsConnection == false) {
    echo "Failed to connect {$error} {$errorString}\n";
    print "Failed to connect {$error} {$errorString}\n";
    return;
}

echo "construct apnsMessage";
$apnsMessage = chr(0) . chr(0) . chr(32) . pack('H*', str_replace(' ', '', $deviceToken)) . chr(0) . chr(strlen($payload)) . $payload;
echo "Message: $apnsMessage<br />\n";

fwrite($apnsConnection, $apnsMessage);

socket_close($apnsConnection);
fclose($apnsConnection);
}
catch(Exception $e) {
    echo 'Caught exception: '.  $e->getMessage(). "\n";
}
?>