<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LocationTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function it_has_a_city(){
        $location = factory(\App\Location::class)->create(['city' => 'Vlissingen']);
        $this->assertEquals('Vlissingen', $location->city);
    }

    /** @test */
    function it_has_a_postcode(){
        $location = factory(\App\Location::class)->create(['postcode' => '6969BJ']);
        $this->assertEquals('6969BJ', $location->postcode);
    }

    /** @test */
    function it_has_a_straat(){
        $location = factory(\App\Location::class)->create(['straat' => 'Coolestraat']);
        $this->assertEquals('Coolestraat', $location->straat);
    }

    /** @test */
    function it_has_a_nummer(){
        $location = factory(\App\Location::class)->create(['nummer' => '69']);
        $this->assertEquals('69', $location->nummer);
    }

    /** @test */
    function it_has_an_add(){
        $location = factory(\App\Location::class)->create(['toevoeging' => 'B']);
        $this->assertEquals('B', $location->toevoeging);
    }

    /** @test */
    function it_requires_a_city(){
        $this->expectException('Illuminate\Database\QueryException');
        $location = factory(\App\Location::class)->create(['city' => null]);
    }

    /** @test */
    function it_requires_a_postcode(){
        $this->expectException('Illuminate\Database\QueryException');
        $location = factory(\App\Location::class)->create(['postcode' => null]);
    }

    /** @test */
    function it_requires_a_straat(){
        $this->expectException('Illuminate\Database\QueryException');
        $location = factory(\App\Location::class)->create(['straat' => null]);
    }

    /** @test */
    function it_requires_a_nummer(){
        $this->expectException('Illuminate\Database\QueryException');
        $location = factory(\App\Location::class)->create(['nummer' => null]);
    }

    /** @test */
    function it_has_multiple_events(){
        $location = factory(\App\Location::class)->create(['id' => 1337]);
        $event1 = factory(\App\Event::class)->create(['location_id' => 1337]);
        $event2 = factory(\App\Event::class)->create(['location_id' => 1337]);
        $event3 = factory(\App\Event::class)->create(['location_id' => 1338]);
        $this->assertCount(2, $location->events);
    }
}
