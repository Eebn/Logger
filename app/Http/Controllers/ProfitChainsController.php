<?php

namespace App\Http\Controllers;

use App\Models\ProfitChains;
use Illuminate\Http\Request;

class ProfitChainsController extends Controller
{
    public function create(Request $request)
    {
        $profitChains = new ProfitChains();

        $profitChains->pair = $request->pair;
        $profitChains->price = $request->price;
        $profitChains->spread = $request->spread;

        $profitChains->save();
        return response()->json($profitChains);
    }
}
