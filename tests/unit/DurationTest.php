<?php

class DurationTest extends \PHPUnit\Framework\TestCase {
    /**
     * @dataProvider isMoreThanOrEqualToWeekProvider
     */
    public function testIsMoreThanOrEqualToWeekReturnsExpectedBoolean($minutes, $expectedBoolean) {
        $this->assertEquals(\Base\Duration::isMoreThanOrEqualToWeek($minutes), $expectedBoolean);
    }

    public function isMoreThanOrEqualToWeekProvider()
    {
        return [
            [15000, true],
            [10080, true],
            [10000, false]
        ];
    }

    /**
     * @dataProvider isMoreThanOrEqualToDayProvider
     */
    public function testIsMoreThanOrEqualToDayReturnsExpectedBoolean($minutes, $expectedBoolean) {
        $this->assertEquals(\Base\Duration::isMoreThanOrEqualToDay($minutes), $expectedBoolean);
    }

    public function isMoreThanOrEqualToDayProvider()
    {
        return [
            [1500, true],
            [1440, true],
            [1000, false]
        ];
    }

    /**
     * @dataProvider isMoreThanOrEqualToHourProvider
     */
    public function testIsMoreThanOrEqualToHourReturnsExpectedBoolean($minutes, $expectedBoolean) {
        $this->assertEquals(\Base\Duration::isMoreThanOrEqualToHour($minutes), $expectedBoolean);
    }

    public function isMoreThanOrEqualToHourProvider()
    {
        return [
            [65, true],
            [60, true],
            [25, false]
        ];
    }

    /**
     * @dataProvider isMoreThanOrEqualToMinuteProvider
     */
    public function testIsMoreThanOrEqualToMinuteReturnsExpectedBoolean($minutes, $expectedBoolean) {
        $this->assertEquals(\Base\Duration::isMoreThanOrEqualToMinute($minutes), $expectedBoolean);
    }

    public function isMoreThanOrEqualToMinuteProvider()
    {
        return [
            [15, true],
            [1, true],
            [0, false]
        ];
    }

    /**
     * @dataProvider isLessThanWeekProvider
     */
    public function testIsLessThanWeekReturnsExpectedBoolean($minutes, $expectedBoolean) {
        $this->assertEquals(\Base\Duration::isLessThanWeek($minutes), $expectedBoolean);
    }

    public function isLessThanWeekProvider()
    {
        return [
            [10000, true],
            [15000, false]
        ];
    }

    /**
     * @dataProvider isLessThanDayProvider
     */
    public function testIsLessThanDayReturnsExpectedBoolean($minutes, $expectedBoolean) {
        $this->assertEquals(\Base\Duration::isLessThanDay($minutes), $expectedBoolean);
    }

    public function isLessThanDayProvider()
    {
        return [
            [1000, true],
            [1500, false]
        ];
    }

    /**
     * @dataProvider isLessThanHourProvider
     */
    public function testIsLessThanHourReturnsExpectedBoolean($minutes, $expectedBoolean) {
        $this->assertEquals(\Base\Duration::isLessThanHour($minutes), $expectedBoolean);
    }

    public function isLessThanHourProvider()
    {
        return [
            [25, true],
            [65, false]
        ];
    }

    public function testNumberOfWeeksInGivenMinutesReturnsExpectedValue() {
        $this->assertEquals(\Base\Duration::numberOfWeeksIn(20160), 2);
    }

    public function testNumberOfDaysInGivenMinutesReturnsExpectedValue() {
        $this->assertEquals(\Base\Duration::numberOfDaysIn(2880), 2);
    }

    public function testNumberOfHoursInGivenMinutesReturnsExpectedValue() {
        $this->assertEquals(\Base\Duration::numberOfHoursIn(120), 2);
    }
}