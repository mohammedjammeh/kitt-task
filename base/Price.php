<?php

namespace Base;

require_once 'Duration.php';

class Price {
    protected $calculatedBy;
    protected $calculatedByCost;
    protected $total;

    const PER_WEEK = 105;
    const PER_DAY = 60;
    const PER_HOUR = 22;
    const PER_MINUTE = 2;

    public function calculateWeekly($minutes)
    {
        return Duration::numberOfWeeksIn($minutes) * self::PER_WEEK;
    }

    public function calculateDaily($minutes)
    {
        return Duration::numberOfDaysIn($minutes) * self::PER_DAY;
    }

    public function calculateHourly($minutes)
    {
        return Duration::numberOfHoursIn($minutes) * self::PER_HOUR;
    }

    public function calculateMinutely($minutes)
    {
        return $minutes * self::PER_MINUTE;
    }
}