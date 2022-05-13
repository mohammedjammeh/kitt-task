<?php

namespace Base;

class Duration {
    const MINUTES_IN_WEEK = 10080;
    const MINUTES_IN_DAY = 1440;
    const MINUTES_IN_HOUR = 60;
    const MINUTE = 1;


    /*
     * More Than Or Equal To Minutes Checks
     */
    public static function isMoreThanOrEqualToWeek($minutes)
    {
        return $minutes >= self::MINUTES_IN_WEEK;
    }

    public static function isMoreThanOrEqualToDay($minutes)
    {
        return $minutes >= self::MINUTES_IN_DAY;
    }

    public static function isMoreThanOrEqualToHour($minutes)
    {
        return $minutes >= self::MINUTES_IN_HOUR;
    }

    public static function isMoreThanOrEqualToMinute($minutes)
    {
        return $minutes >= self::MINUTE;
    }


    /*
     * Less Than Minutes Checks
     */
    public static function isLessThanWeek($minutes)
    {
        return $minutes < self::MINUTES_IN_WEEK;
    }

    public static function isLessThanDay($minutes)
    {
        return $minutes < self::MINUTES_IN_DAY;
    }

    public static function isLessThanHour($minutes)
    {
        return $minutes < self::MINUTES_IN_HOUR;
    }

    
    /*
     * Number of Weeks In Minutes Calculators
     */
    public static function numberOfWeeksIn($minutes)
    {
        return $minutes / self::MINUTES_IN_WEEK;
    }

    public static function numberOfDaysIn($minutes)
    {
        return $minutes / self::MINUTES_IN_DAY;
    }

    public static function numberOfHoursIn($minutes)
    {
        return $minutes / self::MINUTES_IN_HOUR;
    }
    
}