<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Services\BestHotelsService;

class BestHotelsServiceTest extends TestCase
{
    use AdditionalAssert;

    /**
     * Test Best Hotels Service response
     * It should return array of objects with specific structure
     * @return void
     */
    public function testBestHotelsService()
    {
        // create new object from BestHotels service class
        $bestHotelsService = new BestHotelsService();

        // get hotels date from this service after mapping it
        $getHotelsData = $bestHotelsService->getHotelsData(
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
