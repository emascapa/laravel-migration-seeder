<?php

//aggiungo il modello creato
use App\Trip;

use Illuminate\Database\Seeder;

class TripsTableSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $trips = config('db.trips');

        foreach($trips as $trip) {
            $newTrip = new Trip();
            $newTrip->title = $trip['title'];
            $newTrip->place = $trip['place'];
            $newTrip->price = $trip['price'];
            $newTrip->image = $trip['image'];
            $newTrip->starting_date = $trip['starting_date'];
            $newTrip->ending_date = $trip['ending_date'];
            $newTrip->max_participants = $trip['max_participants'];
            $newTrip->discount = $trip['discount'];
            $newTrip->is_available = $trip['is_available'];

            $newTrip->save();
        }

    }
}
