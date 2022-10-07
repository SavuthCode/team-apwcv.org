<?php

namespace App\Http\Controllers;
use App\Register;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        $register = Register::get();
        return response(['data'=>$register, "hasNex"=> true,
        "limit"=> 5,
        "offset"=> 1,
        "page"=> 1,
        "total"=> 100]);
    }

    public function getTestingId($id) {
        $register = Register::find($id);
        return response(['data'=>$register, "hasNex"=> true,
        "limit"=> 5,
        "offset"=> 1,
        "page"=> 1,
        "total"=> 100]);
    }

    public function saveRegister(Request $request) {
       $register = Register::create($request->all());
       return response()->json($register,201);
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
