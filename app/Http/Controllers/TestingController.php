<?php

namespace App\Http\Controllers;
use App\Testing;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTesting()
    {
        $testing = Testing::get();
        return response(['data'=>$testing, "hasNex"=> true,
        "limit"=> 5,
        "offset"=> 1,
        "page"=> 1,
        "total"=> 100]);
    }

    public function getTestingId($id) {
        $testing = Testing::find($id);
        return response(['data'=>$testing, "hasNex"=> true,
        "limit"=> 5,
        "offset"=> 1,
        "page"=> 1,
        "total"=> 100]);
    }

    public function saveTesting(Request $request) {
       $testing = Testing::create($request->all());
       return response()->json($testing,201);
    }

    public function updateTesting(Request $request, Testing $testing) {
        $testing->update($request->all());
        return response()->json($testing,200);
    }

    public function deleteTesting(Request $request, Testing $testing) {
        $testing->delete();
        return response()->json(['message'=>'Tester delete success'],204);
        
    }

}
