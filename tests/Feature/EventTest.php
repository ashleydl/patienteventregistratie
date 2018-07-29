<?php

namespace Tests\Feature;

use Tests\Testcase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
Use Illuminate\Foundation\Testing\DatabaseTransactions;

class EventTest extends TestCase

{
    public function test_if_it_is_possible_to_put_name_in_date()
    {
        $this->expectException('Illuminate\Database\QueryException');
        $uut = factory(\App\Event::class)->create(['date' => '2017-04-05']);
        $this->assertEquals('2017-04-05', $uut->date);
    }

    public function test_empty_field()
    {
        $uut = factory(\App\Event::class)->create(['name' => 'ashley']);
        $this->assertEquals('ashley', $uut->name);
    }

    /**
     *
     */
    public function it_should_have_a_date()
    {
        $uut = factory(\App\Event::class)->create(['date' => '2017-05-04']);
        $this->assertEquals('2017-05-04', $uut->date);
    }

    /** @test */
    public function it_should_have_a_location_id()
    {
        $uut = factory(\App\Event::class)->create(['location_id' => '1']);
        $this->assertEquals('1', $uut->location_id);
    }

    public function test_empty_field_date ()
    {
        $this->expectException('Illuminate\Database\QueryException');
        $uut = factory(\App\Event::class)->create(['location' => NULL]);
        $this->assertEquals('location', $uut->location_id);

    }

}

