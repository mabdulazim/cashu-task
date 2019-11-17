<?php 

namespace App\Services;

interface HotelContract
{
    public function getHotelsData($dateFrom, $dateTo, $city, $adultsCount);
}