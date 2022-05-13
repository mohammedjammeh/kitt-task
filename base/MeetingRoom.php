<?php

namespace Base;

require_once 'Duration.php';
require_once 'Price.php';

class MeetingRoom {
    private $price; 

    public function __construct() 
    {
        $this->price = new Price();
    }
 

    public function getPrice($minutes)
    {
        if(Duration::isMoreThanOrEqualToWeek($minutes)) {
            return $this->price->calculateWeekly($minutes);
        }

        if(Duration::isMoreThanOrEqualToDay($minutes) && Duration::isLessThanWeek($minutes)) {
            $bookingPricePerDay = $this->price->calculateDaily($minutes);

            return $bookingPricePerDay > PRICE::PER_WEEK ? PRICE::PER_WEEK : $bookingPricePerDay;
        }

        if(Duration::isMoreThanOrEqualToHour($minutes) && Duration::isLessThanDay($minutes)) {
            $bookingPricePerHour = $this->price->calculateHourly($minutes);

            return $bookingPricePerHour > PRICE::PER_DAY ? PRICE::PER_DAY : $bookingPricePerHour;
        }

        if(Duration::isMoreThanOrEqualToMinute($minutes) && Duration::isLessThanHour($minutes)) {
            $bookingPricePerMinute = $this->price->calculateMinutely($minutes); 

            return $bookingPricePerMinute > PRICE::PER_HOUR ? PRICE::PER_HOUR : $bookingPricePerMinute;
        }

        return 0;
    }
    
}