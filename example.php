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


// Retrieve the token first from your Client Keys that was issued to you from visp.net
$identity = $client->getIdentity("e88257c5-e13c-46c1-996c-8a3a46aa7737", "K4fX9CTSFYdq3+tSpO9VabWmCM3SM2js");
$client->authorize($identity);



$tower = 215992;
$results = $client->getCustomers($tower, "");

foreach ($results as $val) {
    $sendSmsMessage($val->getSubscriber()->getCellPhone(), $val->getSubscriber()->getFullName(),
    "We are currently undergoing some maintenance " .
    "with the tower you are connecting. Please check back after 15 minutes");
}