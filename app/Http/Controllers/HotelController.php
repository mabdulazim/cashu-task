<?php

namespace App\Http\Controllers;

use App\Services\HotelService;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    private $hotelService;

    public function __construct(HotelService $hotelService)
    {
        $this->hotelService = $hotelService;
    }
    
    public function index(Request $request)
    {
        $hotels = $this->hotelService->getHotels(
            $request->dateFrom, 
            $request->dateTo, 
            $request->city, 
            $request->adultsCount
        );

        return response()->json($hotels);
    }
}
