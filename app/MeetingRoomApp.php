<?php

include './base/MeetingRoom.php';


$meetingRoom = new \Base\MeetingRoom();

echo "How many minutes do you want to book the meeting room for? ";

$handle = fopen ("php://stdin","r");
$bookingMins = fgets($handle);
fclose($handle);

// Mini Validation
if(! intval(trim($bookingMins))) {
    echo "Please enter number of minutes next time. \n";
    exit;
} 

// Price Response
echo $meetingRoom->getPrice($bookingMins) . "\n";
echo "Thank you...\n";