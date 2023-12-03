<?php

namespace App\Http\Controllers;

use App\Models\Herbs;
use Illuminate\Http\Request;

class HerbsController extends Controller
{
    //
    public function showHerbsList()
    {
        $herbs = Herbs::all();

        return view('herbs.herbs', [
            'herbs' => $herbs
        ]);
    }

    public function showHerbsDetail($herbsId)
    {
        $herbsDetail = Herbs::findOrFail($herbsId);

        return view('herbs.show', [
            'herbsDetail' => $herbsDetail
        ]);
    }
}
