<?php

namespace App\Http\Controllers\Api;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function getCitiesByProvince($provinceId)
    {
        $cities = City::where('parent_id', $provinceId)->get();
        return response()->json($cities);
    }
}
