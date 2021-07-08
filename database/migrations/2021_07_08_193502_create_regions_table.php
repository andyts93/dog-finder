<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        \Illuminate\Support\Facades\DB::table('regions')->insert([
            [
                'name' => 'Valle d\'Aosta'
            ],
            [
                'name' => 'Piemonte'
            ],
            [
                'name' => 'Lombardia'
            ],
            [
                'name' => 'Liguria'
            ],
            [
                'name' => 'Veneto'
            ],
            [
                'name' => 'Friuli Venezia Giulia'
            ],
            [
                'name' => 'Trentino Alto Adige'
            ],
            [
                'name' => 'Emilia Romagna'
            ],
            [
                'name' => 'Toscana'
            ],
            [
                'name' => 'Umbria'
            ],
            [
                'name' => 'Lazio'
            ],
            [
                'name' => 'Marche'
            ],
            [
                'name' => 'Abruzzo'
            ],
            [
                'name' => 'Molise'
            ],
            [
                'name' => 'Campania'
            ],
            [
                'name' => 'Puglia'
            ],
            [
                'name' => 'Basilicata'
            ],
            [
                'name' => 'Calabria'
            ],
            [
                'name' => 'Sicilia'
            ],
            [
                'name' => 'Sardegna'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
