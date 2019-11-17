<?php

namespace App\Http\Controllers;

use App\Services\HotelService;

use App\Http\Requests\HotelRequest;

class HotelController extends Controller
{
    /**
     * hotel service 
     *
     * @var object
     */
    private $hotelService;

    public function __construct(HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }
    
    /**
     * get hotels data list
     * @param date $from_date
     * @param date $to_date
     * @param string 3 letters $city
     * @param integer $adults_number
     * @return array
     */

    public function index(HotelRequest $request)
    {
        $hotels = $this->hotelService->getHotels(
            $request->from_date, 
            $request->to_date, 
            $request->city, 
            $request->adults_number
        );

        return response()->json($hotels);
    }
}
