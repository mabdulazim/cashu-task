<?php

namespace App\Services;

use Exception;

abstract class HotelFactory
{   
    // ACTIVE HOTELS PROVIDERS
    const providers = ['TopHotel', 'BestHotels']; 

    /**
     * get provider name object dependent on $providerName
     * @param string  $providerName
     * @return object
     */
    public static function getHotels($providerName)
    {
        switch ($providerName) 
        {
            case 'TopHotel':
                return new TopHotelService;
                break;
            case 'BestHotels':
                return new BestHotelsService;
                break;
            // we can add another provider here later without editing main class.
            default:
                throw new Exception("unknown provider name");
        }
    }
}
