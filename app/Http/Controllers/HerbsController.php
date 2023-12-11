<?php

namespace App\Http\Controllers;

use App\Models\Herbs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HerbsController extends Controller
{
    //
    public function showHerbsList()
    {
        $herbs = Herbs::all();
        $alchemicalHerbs = DB::select("SELECT * FROM herbs WHERE herbCollection = 'Alchemical' ", );
        $exoticHerbs = DB::select("SELECT * FROM herbs WHERE herbCollection = 'Exotic' ", );
        $swiftgrowHerbs = DB::select("SELECT * FROM herbs WHERE herbCollection = 'Swiftgrow' ", );

        return view('herbs.herbs', [
            'herbs' => $herbs,
            'alchemicalHerbs' => $alchemicalHerbs,
            'exoticHerbs' => $exoticHerbs,
            'swiftgrowHerbs' => $swiftgrowHerbs
        ]);
    }

    public function showHerbsDetail($herbsId)
    {
        $herbsDetail = Herbs::findOrFail($herbsId);

        $allHerbsIds = Herbs::where('herbsId', '<>', $herbsId)->pluck('herbsId')->all();

        shuffle($allHerbsIds);
        $youMightAlsoLikeIds = array_slice($allHerbsIds, 0, 4);

        $youMightAlsoLike = Herbs::whereIn('herbsId', $youMightAlsoLikeIds)->paginate(4);

        return view('herbs.show', [
            'herbsDetail' => $herbsDetail,
            'youMightAlsoLike' => $youMightAlsoLike,
        ]);
    }

    public function showFeaturedHerbs()
    {
        // $featuredHerbsIds = [3, 9, 6]; <-- kayak gini juga bisa jadi simple
        $featuredHerbsIds = DB::select("SELECT herbsId FROM herbs WHERE herbsId IN ('3', '9', '6')", );

        $featuredHerbsIds = array_map(function ($item) {
            return $item->herbsId;
        }, $featuredHerbsIds);

        $featuredHerbs = Herbs::whereIn('herbsId', $featuredHerbsIds)->get();

        return view('main.landing-page', [
            'featuredHerbs' => $featuredHerbs,
        ]);
    }
}
