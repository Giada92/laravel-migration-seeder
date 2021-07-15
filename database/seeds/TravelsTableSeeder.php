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
        $prova = config('travel');
        dd($prova);
        /* $travel = Travel::all();
        dd($travel); */

    }
}
