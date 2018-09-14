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
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController
{
    public function search(Request $request)
    {
        $provind = Provind::all();
        $district = District::all();
        $categories = Category::all();
        $search = $request->search;
        $countRestaurant = DB::table('restaurants')->where('name', 'like', '%' . $search . '%')
            ->where('status', '=', '1')->get();
        $list_restaurant = DB::table('restaurants')
            ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
            ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
            ->join('districts', 'addresses.districtID', '=', 'districts.id')
            ->join('wards', 'addresses.wardID', '=', 'wards.id')
            ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
            ->where('restaurants.name', 'like', '%' . $search . '%')
            ->where('restaurants.status', '=', '1')
            ->orderBy('created_at', 'DESC')->paginate(8);
//        dd($list_restaurant);
        return view('client.search', compact('list_restaurant', 'categories', 'search', 'provind', 'district', 'countRestaurant'));
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

    public function categoryArea(Request $request)
    {
        $provind = Provind::all();
        $district = District::all();
        $categories = Category::all();
        $categoryID = $request->get('categoryID');
        $idProvind = $request->get('provind');
        $idDistrict = $request->get('district');
        $provindName = Provind::find($idProvind);
        $districtName = District::find($idDistrict);
        $categoryName = Category::find($categoryID);
        if ($idProvind == 0) {
            $countRestaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->where('districts.id', $idDistrict)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.categoryID', '=', $categoryID)->get();

            $list_restaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('districts.id', $idDistrict)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.categoryID', '=', $categoryID)
                ->orderBy('created_at', 'DESC')->paginate(8);
        } else if ($idDistrict == 0) {
            $countRestaurant = DB::table('provinds')
                ->join('addresses', 'addresses.provindID', '=', 'provinds.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->where('provinds.id', $idProvind)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.categoryID', '=', $categoryID)->get();

            $list_restaurant = DB::table('provinds')
                ->join('addresses', 'addresses.provindID', '=', 'provinds.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->join('districts', 'addresses.districtID', '=', 'districts.id')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('provinds.id', $idProvind)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.categoryID', '=', $categoryID)
                ->orderBy('created_at', 'DESC')->paginate(8);
        } else {
            $countRestaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->where('provinds.id', $idProvind)
                ->where('districts.id', $idDistrict)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.categoryID', '=', $categoryID)->get();

            $list_restaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('provinds.id', $idProvind)
                ->where('districts.id', $idDistrict)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.categoryID', '=', $categoryID)
                ->orderBy('created_at', 'DESC')->paginate(8);
//            dd($list_restaurant);
        }
        return view('client.categoryBlade', compact('list_restaurant', 'categories', 'search',
            'provind', 'district', 'provindName', 'districtName', 'idDistrict', 'idProvind', 'categoryID',
            'countRestaurant', 'category', 'categoryName'));
    }

    public function searchArea(Request $request)
    {
        $provind = Provind::all();
        $district = District::all();
        $categories = Category::all();
        $categoryID = $request->get('categoryID');
        $search = $request->get('search');
        $idProvind = $request->get('provind');
        $idDistrict = $request->get('district');
        $category = $request->get('category');
        $provindName = Provind::find($idProvind);
        $districtName = District::find($idDistrict);
        $categoryName = Category::find($category);
        if ($idProvind == 0 && $idDistrict == 0) {
            $countRestaurant = Restaurant::where('categoryID', $category)->get();
            $list_restaurant = DB::table('restaurants')
                ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
                ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
                ->join('districts', 'addresses.districtID', '=', 'districts.id')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('categoryID', $category)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->orderBy('created_at', 'DESC')
                ->paginate(8);
        } else if ($category == 0 && $idDistrict == 0) {
            $countRestaurant = DB::table('provinds')
                ->join('addresses', 'addresses.provindID', '=', 'provinds.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->where('provinds.id', $idProvind)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->where('restaurants.status', '=', 1)->get();

            $list_restaurant = DB::table('restaurants')
                ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
                ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
                ->join('districts', 'addresses.districtID', '=', 'districts.id')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('provinds.id', $idProvind)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->orderBy('created_at', 'DESC')
                ->paginate(8);
        } else if ($category == 0 && $idProvind == 0) {
            $countRestaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->where('districts.id', $idDistrict)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')->get();;

            $list_restaurant = DB::table('restaurants')
                ->join('addresses', 'restaurants.addressID', '=', 'addresses.id')
                ->join('provinds', 'addresses.provindID', '=', 'provinds.id')
                ->join('districts', 'addresses.districtID', '=', 'districts.id')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('districts.id', $idDistrict)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->orderBy('created_at', 'DESC')
                ->paginate(8);
        } else if ($category == 0) {
            $countRestaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->where('districts.id', $idDistrict)
                ->where('provinds.id', $idProvind)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')->get();

            $list_restaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('districts.id', $idDistrict)
                ->where('provinds.id', $idProvind)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->orderBy('created_at', 'DESC')->paginate(8);
        } else if ($idProvind == 0) {
            $countRestaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->where('districts.id', $idDistrict)
                ->where('restaurants.categoryID', $category)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')->get();

            $list_restaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('districts.id', $idDistrict)
                ->where('restaurants.categoryID', $category)
                ->where('restaurants.status', '=', 1)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->orderBy('created_at', 'DESC')->paginate(8);
        } else if ($idDistrict == 0) {
            $countRestaurant = DB::table('provinds')
                ->join('addresses', 'addresses.provindID', '=', 'provinds.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->where('provinds.id', $idProvind)
                ->where('restaurants.categoryID', $category)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->where('restaurants.status', '=', 1)->get();

            $list_restaurant = DB::table('provinds')
                ->join('addresses', 'addresses.provindID', '=', 'provinds.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->join('districts', 'addresses.districtID', '=', 'districts.id')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('provinds.id', $idProvind)
                ->where('restaurants.categoryID', $category)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->where('restaurants.status', '=', 1)
                ->orderBy('created_at', 'DESC')->paginate(8);
        } else {
            $countRestaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->where('provinds.id', $idProvind)
                ->where('districts.id', $idDistrict)
                ->where('restaurants.categoryID', $category)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->where('restaurants.status', '=', 1)->get();

            $list_restaurant = DB::table('districts')
                ->join('addresses', 'addresses.districtID', '=', 'districts.id')
                ->join('provinds', 'provinds.id', '=', 'districts.provindID')
                ->join('wards', 'addresses.wardID', '=', 'wards.id')
                ->join('restaurants', 'restaurants.addressID', '=', 'addresses.id')
                ->select('restaurants.*', 'provinds.name as provindName', 'districts.name as districtName', 'wards.name as wardName')
                ->where('provinds.id', $idProvind)
                ->where('districts.id', $idDistrict)
                ->where('restaurants.categoryID', $category)
                ->where('restaurants.name', 'like', '%' . $request->get('search') . '%')
                ->where('restaurants.status', '=', 1)
                ->orderBy('created_at', 'DESC')->paginate(8);
        }
//        dd($list_restaurant);
        return view('client.searchPlace', compact('list_restaurant', 'categories', 'search',
            'provind', 'district', 'provindName', 'districtName', 'idDistrict', 'idProvind', 'categoryID',
            'countRestaurant', 'category', 'categoryName'));
    }
}