<?php

namespace App\ThirdParty;

class BestHotels
{
    public function getHotelsData($dateFrom, $dateTo, $city, $adultsCount)
    {
        $data  = [];

        $roomAmenities = ['chair', 'table', 'tv', 'telephone', 'alarm', 'fridge'];

        foreach (range(1, 10) as $index) 
        {
            $data[] = [
                'hotel'         => 'best hotel '.$index,
                'hotelRate'     => rand(1, 5),
                'hotelFare'     => mt_rand(20000, 100000) / 100,
                'roomAmenities' => implode(',', $roomAmenities),
            ];
        }
        
        return $data;
    }
}
