<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/30/2018
 * Time: 11:24 AM
 */

namespace App\Http\Controllers\client;


use App\Category;
use App\District;
use App\Provind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController
{
    public function search(Request $request)
    {
        $provind = Provind::all();
        $district = District::all();
        $categories = Category::all();
        $search = $request->search_data;
        $list_restaurant = DB::table('restaurants')->where('name', 'like', '%' . $search . '%')->where('status', '=', '1')->take(15)->get();
//        dd($list_restaurant);
        return view('client.category', compact('list_restaurant', 'categories', 'search', 'provind', 'district'));
    }

    public function showDistrict($id)
    {
        $district = District::where('provindID', $id)->get();
//        dd($district);
        echo "<option value='0'>Tất cả</option>";
        foreach ($district as $d) {
            echo "<option value='$d->id'>$d->name</option>";
        }
    }

    public function searchArea(Request $request)
    {
        $provind = Provind::all();
        $district = District::all();
        $categories = Category::all();
        $search = $request->get('search');
        $idProvind = $request->get('provind');
        $idDistrict = $request->get('district');
        $provindName = Provind::find($idProvind);
        $districtName = District::find($idDistrict);
        if ($idDistrict == 0) {
            $list_restaurant = DB::table('provinds')
                ->join('addresses', 'addresses.provindID', '=', 'provinds.id')
//            ->join('districts','districts.provindID','=','provinds.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->select('restaurants.*', 'provinds.id', 'provinds.name as provindName')
                ->where('provinds.id', $idProvind)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->where('restaurants.status', '=', 1)->get()->toArray();
        } else{
            $list_restaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->select('restaurants.*', 'provinds.id', 'provinds.name as provindName', 'districts.id', 'districts.name as districtName')
                ->where('provinds.id', $idProvind)
                ->where('districts.id', $idDistrict)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->where('restaurants.status', '=', 1)->get()->toArray();
//            dd($list_restaurant);
        }
//        dd($list_restaurant);
        return view('client.categoryArea', compact('list_restaurant', 'categories', 'search', 'provind', 'district', 'provindName', 'districtName','idDistrict'));
    }
}