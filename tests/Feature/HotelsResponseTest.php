<?php

namespace Tests\Feature;

use Tests\TestCase;

use Illuminate\Foundation\Testing\WithFaker;

class HotelsResponseTest extends TestCase
{
    use WithFaker;

    protected function setUp(): void
    {
        parent::setUp();
    }

    private function createAttributes()
    {
        $faker = \Faker\Factory::create();

        $attributes = [            
            "from_date"     => $faker->date('Y-m-d'),
            "to_date"       => $faker->date('Y-m-d'),
            "city"          => "AUH",
            "adults_number" => 4,
        ];

        return $attributes;
    }

    public function testExample()
    {
        $params = $this->createAttributes();

        $response = $this->json('GET', '/api/v1/hotels', $params,[
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ]);
        
        $response
        ->assertStatus(200) // VALIDATE RESPONSE STATUS 200
        ->assertJsonStructure(['data' => [
                '*' => [
                    'provider', 'hotelName', 'fare', 'amenities' => []
                ]
            ]
        ]); // VALIDATE RESPONSE DATA IS EQUAL THIS STRUCTURE AND HAS THE SAME KEYS
    }


}
