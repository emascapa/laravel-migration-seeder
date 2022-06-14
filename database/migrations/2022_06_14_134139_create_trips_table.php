<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('trips', function (Blueprint $table) {
            
            $table->id();
            $table->string('title', 50);
            $table->string('place', 100)->nullable();
            $table->decimal('price', 9, 2);
            $table->string('image')->nullable()->default('http://www.staticwhich.co.uk/static/images/products/no-image/no-image-available.png');
            $table->date('starting_date');
            $table->date('ending_date');
            $table->smallInteger('max_participants')->nullable();
            $table->smallInteger('discount')->nullable()->default(0);
            $table->boolean('is_available')->nullable()->default(1);
            $table->timestamps();


            /* 
            colonne tabella trips :

            - name
            - price
            - place
            - image
            - starting date
            - ending date
            - number participants
            - discount
            - available

            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
