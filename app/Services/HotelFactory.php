<?php

namespace App\Services;

class HotelFactory
{   
    // ACTIVE HOTELS PROVIDERS
    const providers = ['TopHotel', 'BestHotels'];

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
            default:
                '';
        }
    }
}
