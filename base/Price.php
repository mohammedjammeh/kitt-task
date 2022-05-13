<?php

namespace Base;

require_once 'Duration.php';

class Price {
    private $tariffBy;
    private $tariff;
    private $total;

    const PER_WEEK = 105;
    const PER_DAY = 60;
    const PER_HOUR = 22;
    const PER_MINUTE = 2;

    
    /*
     * Calculate Dynamic Prices
     */
    public function calculateWeekly($minutes)
    {
        $this->tariffBy = 'weekly';
        $this->tariff = self::PER_WEEK;
        $this->total = Duration::numberOfWeeksIn($minutes) * self::PER_WEEK;

        return $this;
    }

    public function calculateDaily($minutes)
    {
        $this->tariffBy = 'daily';
        $this->tariff = self::PER_DAY;
        $this->total = Duration::numberOfDaysIn($minutes) * self::PER_DAY;

        return $this;
    }

    public function calculateHourly($minutes)
    {
        $this->tariffBy = 'hourly';
        $this->tariff = self::PER_HOUR;
        $this->total = Duration::numberOfHoursIn($minutes) * self::PER_HOUR;

        return $this;
    }

    public function calculateMinutely($minutes)
    {
        $this->tariffBy = 'minutely';
        $this->tariff = self::PER_MINUTE;
        $this->total = $minutes * self::PER_MINUTE;

        return $this;
    }


    /*
     * Singular Static Prices
     */
    public function oneWeek()
    {
        $this->tariffBy = 'weekly';
        $this->tariff = self::PER_WEEK;
        $this->total = self::PER_WEEK;

        return $this;
    }

    public function oneDay()
    {
        $this->tariffBy = 'daily';
        $this->tariff = self::PER_DAY;
        $this->total = self::PER_DAY;

        return $this;
    }

    public function oneHour()
    {
        $this->tariffBy = 'hourly';
        $this->tariff = self::PER_HOUR;
        $this->total = self::PER_HOUR;

        return $this;
    }


    /*
     * Getters
     */
    public function getTariffBy()
    {
        return $this->tariffBy;
    }

    public function getTariff()
    {
        return $this->tariff;
    }

    public function getTotal()
    {
        return round($this->total, 2);
    }
}