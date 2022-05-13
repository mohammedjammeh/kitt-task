<?php

class MeetingRoomTest extends \PHPUnit\Framework\TestCase {
    /**
     * @dataProvider getMeetingRoomPriceProvider
     */
    public function testIsMoreThanOrEqualToWeekReturnsExpectedBoolean($minutes, $tariffBy, $tariff, $total) {
        $meetingRoom = new \Base\MeetingRoom();

        $this->assertEquals($meetingRoom->getPrice($minutes)->getTariffBy(), $tariffBy);
        $this->assertEquals($meetingRoom->getPrice($minutes)->getTariff(), $tariff);
        $this->assertEquals($meetingRoom->getPrice($minutes)->getTotal(), $total);
    }

    public function getMeetingRoomPriceProvider()
    {
        return [
            [20160, 'weekly', 105, 210],
            [20160, 'weekly', 105, 210],
            [15120, 'weekly', 105, 157.5],
            [2160, 'daily', 60, 90],
            [300, 'daily', 60, 60],
            [1440, 'daily', 60, 60],
            [180, 'daily', 60, 60],
            [120, 'hourly', 22, 44],
            [34, 'hourly', 22, 22],
            [12, 'hourly', 22, 22],
            [10, 'minutely', 2, 20],
            [8, 'minutely', 2, 16]
        ];
    }
}