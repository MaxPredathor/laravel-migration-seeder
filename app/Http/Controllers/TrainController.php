<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function trains()
    {
        $trains = Train::where('giorno_di_partenza', '2023-12-21')->get();
        return view('trains', compact('trains'));
    }
}
