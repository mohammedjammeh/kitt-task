<?php

class PriceTest extends \PHPUnit\Framework\TestCase {
    public function testCalculateWeeklyMethodReturnsExpectedValue() {
        $price = (new \Base\Price())->calculateWeekly(20160);

        $this->assertEquals($price->getTariffBy(), 'weekly');
        $this->assertEquals($price->getTariff(), 105);
        $this->assertEquals($price->getTotal(), 210);
    }

    public function testCalculateDailyMethodReturnsExpectedValue() {
        $price = (new \Base\Price())->calculateDaily(2880);

        $this->assertEquals($price->getTariffBy(), 'daily');
        $this->assertEquals($price->getTariff(), 60);
        $this->assertEquals($price->getTotal(), 120);
    }

    public function testCalculateHourlyMethodReturnsExpectedValue() {
        $price = (new \Base\Price())->calculateHourly(120);

        $this->assertEquals($price->getTariffBy(), 'hourly');
        $this->assertEquals($price->getTariff(), 22);
        $this->assertEquals($price->getTotal(), 44);
    }

    public function testCalculateMinutelyMethodReturnsExpectedValue() {
        $price = (new \Base\Price())->calculateMinutely(10);

        $this->assertEquals($price->getTariffBy(), 'minutely');
        $this->assertEquals($price->getTariff(), 2);
        $this->assertEquals($price->getTotal(), 20);
    }

    public function testOneWeekMethodReturnsExpectedValue() {
        $price = (new \Base\Price())->oneWeek();

        $this->assertEquals($price->getTariffBy(), 'weekly');
        $this->assertEquals($price->getTariff(), 105);
        $this->assertEquals($price->getTotal(), 105);
    }

    public function testOneDayMethodReturnsExpectedValue() {
        $price = (new \Base\Price())->oneDay();

        $this->assertEquals($price->getTariffBy(), 'daily');
        $this->assertEquals($price->getTariff(), 60);
        $this->assertEquals($price->getTotal(), 60);
    }

    public function testOneHourMethodReturnsExpectedValue() {
        $price = (new \Base\Price())->oneHour();

        $this->assertEquals($price->getTariffBy(), 'hourly');
        $this->assertEquals($price->getTariff(), 22);
        $this->assertEquals($price->getTotal(), 22);
    }
}