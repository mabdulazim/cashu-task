<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class BestHotelsTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform($bestHotels)
    {
        return [
            'provider'   => 'BestHotels',
            'hotelName'  => $bestHotels['hotel'],
            'fare'       => $bestHotels['hotelFare'],
            'amenities'  => explode(',', $bestHotels['roomAmenities']), // CONVERT STRING TO ARRAY
            'rate'       => $bestHotels['hotelRate'],
        ];
    }
}
