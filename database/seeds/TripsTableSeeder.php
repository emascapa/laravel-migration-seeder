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

        foreach ($trips as $trip) {

            $newTrip = new Trip();

            $newTrip->title = $trip['title'];

            if (isset($trip['place'])) {
                $newTrip->place = $trip['place'];
            }

            $newTrip->price = $trip['price'];

            if (isset($trip['image'])) {
                $newTrip->image = $trip['image'];
            }

            $newTrip->starting_date = $trip['starting_date'];

            $newTrip->ending_date = $trip['ending_date'];

            if (isset($trip['max_participants'])) {
                $newTrip->max_participants = $trip['max_participants'];
            }

            if (isset($trip['discount'])) {
                $newTrip->discount = $trip['discount'];
            }

            if (isset($trip['is_available'])) {
                $newTrip->is_available = $trip['is_available'];
            }

            $newTrip->save();
        }
    }
}
