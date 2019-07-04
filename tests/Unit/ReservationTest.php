<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReservationTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testReservationStatus()
    {
		$data = [
			'username' => "admin@admin.com",
			'password' => "admin@123",
			'status' => 'confirmed',
		];
            $user = factory(\App\User::class)->create();
            $response = $this->actingAs($user, 'api')->json('POST', '/api/getreservation',$data);
            $response->assertStatus(200);
             //$response->dumpHeaders();
            //$response->dump();

            $response->assertJsonStructure(
                [
                    'status' ,
                    'res' => [
                        '*' =>
                            [
                                'id',
                                'status',
                                'created_at',
                                'updated_at'
                            ]
                        ]
                ]
            );
    }
}
