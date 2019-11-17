<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Services\TopHotelService;

class TopHotelServiceTest extends TestCase
{
    use AdditionalAssert;

    /**
     * Test Top Hotel Service response
     * It should return array of objects with specific structure
     * @return void
     */
    public function testTopHotelService()
    {
        // create new object from TopHotel service class
        $topHotelService = new TopHotelService();

        // get hotels date from this service after mapping it
        $getHotelsData = $topHotelService->getHotelsData(
            "2019-11-01",
            "2019-11-18",
            "AUH",
            4
        );

        // validate the returned data match this structure
        $this->assertArrayStructure($getHotelsData, [
            '*' => [
                'provider', 'hotelName', 'fare', 'amenities' => [], 'rate'
            ]
        ]);
    }
}
