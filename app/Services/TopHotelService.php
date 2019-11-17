<?php

namespace App\Services;

// THIRD PARTY
use App\ThirdParty\TopHotel;

// TRANSFORMERS
use App\Transformers\TopHotelTransformer;

class TopHotelService implements HotelInterface
{   
    /**
     * get hotels data from TopHotel provider and map data
     * @param date $dateFrom
     * @param date $dateTo
     * @param string 3 letters $city
     * @param integer $adultsCount
     * @return array
     */
    public function getHotelsData($dateFrom, $dateTo, $city, $adultsCount)
    {
        // CREATE NEW OBJECT FROM TopHotel THIRD PARTY API
        $topHotel = new TopHotel;   

        // GET HOTELS DATA FROM THIRD PARTY API.
        $hotels = $topHotel->getHotelsData($dateFrom, $dateTo, $city, $adultsCount);

        // MAP RESPONSE THROUGH TRANSFORMER
        $hotels = fractal($hotels, new TopHotelTransformer())->toArray();

        // RETURN MAPPED HOTELS DATA
        return $hotels['data'];
    }
}
