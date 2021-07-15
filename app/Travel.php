<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    //quando la tabella e il modello non sono al singolare e plurale
    //diciamo direttamente noi il nome della tabella!
    protected $table = 'travels';
}
