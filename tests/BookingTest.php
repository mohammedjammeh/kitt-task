<?php

class BookingTest extends \PHPUnit\Framework\TestCase {
    public function testGetPrice() {
        $meetingRoom = new \Base\MeetingRoom();

        $this->assertEquals($meetingRoom->getPrice(), 1);
    }
}