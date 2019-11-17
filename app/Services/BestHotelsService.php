<?php

namespace App\Services;

// THIRD PARTY
use App\ThirdParty\BestHotels;

// TRANSFORMERS
use App\Transformers\BestHotelsTransformer;

class BestHotelsService implements HotelInterface
{   
    /**
     * get hotels data from BestHotel provider and map data
     * @param date $dateFrom
     * @param date $dateTo
     * @param string 3 letters $city
     * @param integer $adultsCount
     * @return array
     */
    public function getHotelsData($dateFrom, $dateTo, $city, $adultsCount)
    {
        // CREATE NEW OBJECT FROM BestHotels THIRD PARTY API.
        $bestHotels = new BestHotels;

        // GET HOTELS DATA FROM THIRD PARTY API.
        $hotels = $bestHotels->getHotelsData($dateFrom, $dateTo, $city, $adultsCount);
        
        // MAP RESPONSE THROUGH TRANSFORMER
        $hotels = fractal($hotels, new BestHotelsTransformer())->toArray();

        // RETURN MAPPED HOTELS DATA
        return $hotels['data'];
    }
}