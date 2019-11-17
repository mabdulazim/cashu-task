<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\ThirdParty\BestHotels;

class BestHotelsThirdPartyTest extends TestCase
{
    use AdditionalAssert;
    
    /**
     * Test Best Hotels third party response
     * It should return array of objects with specific structure
     * @return void
     */
    public function testExample()
    {
        // create new object from BestHotels third party class
        $bestHotels = new BestHotels();

        // get data from service provider
        $getHotelsData = $bestHotels->getHotelsData(
            "2019-11-01",
            "2019-11-18",
            "AUH",
            4
        );

        // validate the returned data match this structure
        $this->assertArrayStructure($getHotelsData, ['*' => 
            ['hotel', 'hotelRate', 'hotelFare', 'roomAmenities']
        ]);
    }

}
