<?php

namespace App\ThirdParty;

class TopHotel
{   
    public function getHotelsData($dateFrom, $dateTo, $city, $adultsCount)
    {
        $data = [];

        $roomAmenities = ['chair', 'table', 'tv', 'telephone', 'alarm', 'fridge'];

        foreach (range(1, 15) as $index) 
        {
            $data[] = [
                'hotelName' => 'top hotel '.$index,
                'rate'      => $this->generateStars(rand(1, 5)),
                'price'     => mt_rand(20000, 100000) / 100,
                'discount'  => rand(50, 100),
                'amenities' => $roomAmenities,
            ];
        }
        
        return $data;
    }

    public function generateStars($num)
    {
        $stars = '';
        for($i = 0; $i < $num; $i++)
        {
            $stars .= '*'; 
        }
        return $stars;
    }

}
