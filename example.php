<?php
namespace Ubo\Client;

date_default_timezone_set('America/Chicago');

require_once(__DIR__ . '/autoload.php');

$sendSmsMessage = function ($phone, $fullName, $message = null) {
    // do some work like calling an SMS library to process the SMS
    if ($phone == null) {
        print "Phone number unavailable for " . $fullName . "\n";
    } else {
        print "Message sent to " . $phone . "\n";
    }
};


use \Ubo\Client\Api\UboApi;

// Initialize the SDK
$client = new UboApi();


// Retrieve the token first from your Client Keys that was issued to you from visp.net and authorize the client
$identity = $client->getIdentity("[YOUR-CLIENT-ID]", "[YOUR-CLIENT-SECRET]");
$client->authorize($identity);



$tower = 215992;
$results = $client->getCustomers($tower, "");

foreach ($results as $val) {
    $sendSmsMessage($val->getSubscriber()->getCellPhone(), $val->getSubscriber()->getFullName(),
    "We are currently undergoing some maintenance " .
    "with the tower you are connecting. Please check back after 15 minutes");
}
