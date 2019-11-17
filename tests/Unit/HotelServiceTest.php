<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Services\HotelService;

class HotelServiceTest extends TestCase
{
    use AdditionalAssert;

    /**
     * Test Hotel Service response
     * It should return array of objects with specific structure
     * @return void
     */
    public function testHotelService()
    {
        // create new object from Hotel service class
        $hotelService = new HotelService();

        // get hotels date from this service after mapping it
        $getHotelsData = $hotelService->getHotels(
            "2019-11-01",
            "2019-11-18",
            "AUH",
            4
        );

        // validate the returned data match this structure
        $this->assertArrayStructure($getHotelsData, [
            'data' => [
                '*' => [
                    'provider', 
                    'hotelName', 
                    'fare', 
                    'amenities' => []
                ]
            ]
        ]);
    }
}
