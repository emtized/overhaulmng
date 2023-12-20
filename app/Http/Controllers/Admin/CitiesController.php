<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CityRequest;

class CitiesController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $province = City::where('parent_id', null)->get();

        return view('admin.cities.index',compact('cities','province'));
    }

    public function store(CityRequest $request)
    {
        $inputs = $request->all();

        City::create($inputs);
        return back()->with('swal-success', 'شهر  با موفقیت ثبت شد');
    }

    public function edit(City $city)
    {
        $province = City::where('parent_id', null)->get();
        return view('admin.cities.edit',compact('city','province'));
    }


    public function update(CityRequest $request, City $city)
    {
        $inputs = $request->all();

        $city->update($inputs);
        return redirect()->route('admin.city.index')->with('swal-success', 'شهر  با موفقیت ویرایش شد');
    }

    public function destroy(City $city)
    {
        $result = $city->delete();
        return back()->with('swal-success','شهر با موفقیت حذف شد');
    }
}
