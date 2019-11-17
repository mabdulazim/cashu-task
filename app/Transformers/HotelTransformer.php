<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class HotelTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform($hotel)
    {
        return [
            'provider'   => $hotel['provider'],
            'hotelName'  => $hotel['hotelName'],
            'fare'       => $hotel['fare'],
            'amenities'  => $hotel['amenities'],
        ];
    }
}
