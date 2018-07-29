<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IncidentenTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test */
    function it_has_a_name(){
        $incident = factory(\App\Incident::class)->create(['namescaregiver' => 'Bas']);
        $this->assertEquals('Bas', $incident->namescaregiver);
    }

    /** @test */
    function it_has_a_complaint(){
        $incident = factory(\App\Incident::class)->create(['complaint' => 'Voet doet pijn']);
        $this->assertEquals('Voet doet pijn', $incident->complaint);
    }

    /** @test */
    function it_has_a_injury(){
        $incident = factory(\App\Incident::class)->create(['injury' => 'Hoofdletsel']);
        $this->assertEquals('Hoofdletsel', $incident->injury);
    }

    /** @test */
    function abcd_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['abcd' => 1]);
        $this->assertEquals(1, $incident->abcd);
    }

    /** @test */
    function respiration_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['respiration' => 1]);
        $this->assertEquals(1, $incident->respiration);
    }

    /** @test */
    function it_has_a_avpu(){
        $incident = factory(\App\Incident::class)->create(['avpu' => 'yes_pain']);
        $this->assertEquals('yes_pain', $incident->avpu);
    }

    /** @test */
    function circulation_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['circulation' => 1]);
        $this->assertEquals(1, $incident->circulation);
    }

    /** @test */
    function active_bleeding_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['active_bleeding' => 1]);
        $this->assertEquals(1, $incident->active_bleeding);
    }

    /** @test */
    function variant_fast_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['variant_fast' => 1]);
        $this->assertEquals(1, $incident->variant_fast);
    }

    /** @test */
    function medicines_fast_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['medicines' => 1]);
        $this->assertEquals(1, $incident->medicines);
    }

    /** @test */
    function it_has_a_medicines_desc(){
        $incident = factory(\App\Incident::class)->create(['medicines_desc' => 'Lekkere pillen']);
        $this->assertEquals('Lekkere pillen', $incident->medicines_desc);
    }

    /** @test */
    function relevant_diseases_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['relevant_diseases' => 1]);
        $this->assertEquals(1, $incident->relevant_diseases);
    }

    /** @test */
    function it_has_a_diseases_history(){
        $incident = factory(\App\Incident::class)->create(['diseases_history' => 'Had vroeger aids']);
        $this->assertEquals('Had vroeger aids', $incident->diseases_history);
    }

    /** @test */
    function last_meal_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['last_meal' => '1979-06-09']);
        $this->assertEquals('1979-06-09', $incident->last_meal);
    }

    /** @test */
    function it_has_a_treatment_desc(){
        $incident = factory(\App\Incident::class)->create(['treatment_desc' => 'Pleister gehad']);
        $this->assertEquals('Pleister gehad', $incident->treatment_desc);
    }

    /** @test */
    function taken_action_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['taken_action' => 'none']);
        $this->assertEquals('none', $incident->taken_action);
    }

    /** @test */
    function timeleft_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['timeleft' => '13:00:00']);
        $this->assertEquals('13:00:00', $incident->timeleft);
    }

    /** @test */
    function it_has_an_additionalcomments(){
        $incident = factory(\App\Incident::class)->create(['additionalcomments' => 'Hij is wel lelijk']);
        $this->assertEquals('Hij is wel lelijk', $incident->additionalcomments);
    }

    /** @test */
    function evaluate_supervisor_is_filled_in(){
        $incident = factory(\App\Incident::class)->create(['evaluate_supervisor' => 1]);
        $this->assertEquals(1, $incident->evaluate_supervisor);
    }

    /** @test */
    function it_requires_a_patient_id(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['patient_id' => null]);
    }

    /** @test */
    function it_requires_an_event_id(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['event_id' => null]);
    }

    /** @test */
    function it_requires_a_complaint(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['complaint' => null]);
    }

    /** @test */
    function it_requires_an_injury(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['injury' => null]);
    }

    /** @test */
    function it_requires_an_abcd(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['abcd' => null]);
    }

    /** @test */
    function it_requires_medicines(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['medicines' => null]);
    }

    /** @test */
    function it_requires_relevant_diseases(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['relevant_diseases' => null]);
    }

    /** @test */
    function it_requires_last_meal(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['last_meal' => null]);
    }

    /** @test */
    function it_requires_a_treatment_desc(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['treatment_desc' => null]);
    }

    /** @test */
    function it_requires_a_timeleft(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['timeleft' => null]);
    }

    /** @test */
    function it_requires_a_namecaregiver(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['namecaregiver' => null]);
    }

    /** @test */
    function it_requires_an_evaluate_supervisor(){
        $this->expectException('Illuminate\Database\QueryException');
        $incident = factory(\App\Incident::class)->create(['evaluate_supervisor' => null]);
    }

    

}
