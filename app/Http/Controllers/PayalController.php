<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payal;

class PayalController extends Controller
{
    public function getdata()
    {
        return["name"=>"Dolly",
                "city"=>"Gondia"];
    }
    Public function storedata(Request $request)
    {
        $store = new Payal();
        $store->name=$request->name;
        $store->city=$request->city;
        $store->save();
        return response()->json(['data' => $store,'success' => 1,'message' => 'Blog inserted successfully'], 200);

    }
    Public function updatedata(Request $request)
    {
        $store = Payal::where('id',$request->id)->first();
        $store->name= $request->name;
        $store->city= $request->city;
        $store->update();
        return response()->json(['data' => $store,'success' => 1,'message' => 'Blog updated successfully'], 200);
    }
    Public function deletedata(Request $request)
    {
        $store = Payal::where('id',$request->id)->first();
        $store->name= $request->name;
        $store->city= $request->city;
        $store->delete();
        return response()->json(['data' => $store,'success' => 1,'message' => 'Blog delete successfully'], 200);
    }
}
