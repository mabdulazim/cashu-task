<?php 

namespace App\Services;

interface HotelInterface
{
    public function getHotelsData($dateFrom, $dateTo, $city, $adultsCount);
}