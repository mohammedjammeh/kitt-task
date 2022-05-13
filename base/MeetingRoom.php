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

            return $bookingPricePerDay->getTotal() > PRICE::PER_WEEK 
                ? $this->price->oneWeek() 
                : $bookingPricePerDay;
        }

        if(Duration::isMoreThanOrEqualToHour($minutes) && Duration::isLessThanDay($minutes)) {
            $bookingPricePerHour = $this->price->calculateHourly($minutes);

            return $bookingPricePerHour->getTotal() > PRICE::PER_DAY 
                ? $this->price->oneDay()
                : $bookingPricePerHour;
        }

        if(Duration::isMoreThanOrEqualToMinute($minutes) && Duration::isLessThanHour($minutes)) {
            $bookingPricePerMinute = $this->price->calculateMinutely($minutes); 

            return $bookingPricePerMinute->getTotal() > PRICE::PER_HOUR 
                ? $this->price->oneHour() 
                : $bookingPricePerMinute;
        }

        return 0;
    }
    
}