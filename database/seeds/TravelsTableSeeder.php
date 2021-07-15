<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $arrayTravels = config('travel');
        /* $travel = Travel::all(); */
        

        foreach($arrayTravels as $travel){
            $newTravel = new Travel();
            $newTravel->destination = $travel['destination'];
            $newTravel->period = $travel['period'];
            $newTravel->n_people = $travel['n_people'];
            $newTravel->price = $travel['price'];
            $newTravel->description = $travel['description'];
            $newTravel->is_avelable = $travel['is_avelable'];
            $newTravel->save();
            
        }
    }
}
