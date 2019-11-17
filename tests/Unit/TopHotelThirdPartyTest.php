<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\ThirdParty\TopHotel;

class TopHotelThirdPartyTest extends TestCase
{
    use AdditionalAssert;
    
    /**
     * Test Top Hotel third party response
     * It should return array of objects with specific structure
     * @return void
     */
    public function testExample()
    {
        // create new object from TopHotel third party class
        $topHotel = new TopHotel();

        // get data from service provider
        $getHotelsData = $topHotel->getHotelsData(
            "2019-11-01",
            "2019-11-18",
            "AUH",
            4
        );

        // validate the returned data match this structure
        $this->assertArrayStructure($getHotelsData, ['*' => 
            ['hotelName', 'rate', 'price', 'discount', 'amenities']
        ]);
    }

}
