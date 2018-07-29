<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->integer('event_id');
            $table->text('complaint');
            $table->enum('injury', array('Hoofdletsel', 'Gezichtsletsel', 'Oogletsel', 'Nekletsel', 'Schouderletsel', 'Rugletsel', 'Borstletsel', 'Buikletsel', 'Armen', 'Handen', 'Bovenbeen', 'Knie', 'Onderbeen', 'Enkel', 'Voet', 'Onwel', 'Alcohol', 'Drugs', 'Suikerspiegel'));
            $table->boolean('abcd');
            $table->boolean('respiration')->nullable();
            $table->enum('avpu', array('yes_verbal', 'yes_pain', 'yes_unresponsive', 'no_alert'))->nullable();
            $table->boolean('circulation')->nullable();
            $table->boolean('active_bleeding')->nullable();
            $table->boolean('variant_fast')->nullable();
            $table->boolean('medicines');
            $table->text('medicines_desc')->nullable();
            $table->boolean('relevant_diseases');
            $table->text('diseases_history')->nullable();
            $table->datetime('last_meal');
            $table->text('treatment_desc');
            $table->enum('taken_action', array('none', 'friendsandfamily', 'bycomplaintscallgp', 'firstaidorgp', 'ambulance', 'deniedtreatment'))->nullable();
            $table->time('timeleft');
            $table->text('additionalcomments')->nullable();
            $table->text('namescaregiver');
            $table->boolean('evaluate_supervisor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidents');
    }
}
