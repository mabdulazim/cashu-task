<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class TopHotelTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform($topHotel)
    {
        return [
            'provider'   => 'TopHotel',
            'hotelName'  => $topHotel['hotelName'],
            'fare'       => $topHotel['price'],
            'amenities'  => $topHotel['amenities'],
            'rate'       => strlen($topHotel['rate']), // CONVERT STRING STARS TO NUMBER
        ];
    }
}
