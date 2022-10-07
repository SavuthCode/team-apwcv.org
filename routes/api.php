<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/v1/request/{id}',function(){
	return response(['data'=>[]]);
});


//testing API

Route::get('/v1/testing', 'TestingController@getTesting');
Route::get('/v1/testing/{id}', 'TestingController@getTestingId');
Route::post('/v1/testing','TestingController@saveTesting');
Route::put('/v1/testing/{testing}','TestingController@updateTesting');
Route::delete('/v1/testing/{testing}','TestingController@deleteTesting');

Route::get('/v1/register', 'RegisterController@getRegister');
Route::get('/v1/register/{id}', 'RegisterController@getRegisterId');
Route::post('/v1/register','RegisterController@saveRegister');
Route::put('/v1/register/{register}','RegisterController@updateRegister');
Route::delete('/v1/register/{register}','RegisterController@deleteRegister');


Route::get('/v1/register/{id}',function(){
	return response(['data'=>[]]);
});


Route::get('/v1/tester/{id}',function(){
	return response(['data'=>[]]);
});

Route::get('/v1/permission/{id}',function(){
	return response(['data'=>[]]);
});

Route::get('/v1/request',function(){
	$user =
 
      	[
      		[
          "id"=> 2,
          "summary"=> "Request 10 Monitor",
          "priority"=> "Height",
          "department"=> "Core Banking",
          "by"=> "Sokvuth",
          "date"=> "2021-01-14 16:09:19",
          "status"=> 1,
          "created_at"=> "2021-01-14T09:21:34.000000Z",
          "updated_at"=> "2021-01-14T09:21:34.000000Z"
      ],
      [
          "id"=> 1,
          "summary"=> "Request 10 Monitor",
          "priority"=> "Height",
          "department"=> "Core Banking",
          "by"=> "Menghour",
          "date"=> "2021-01-14 16:09:19",
          "status"=> 1,
          "created_at"=> "2021-01-14T09:21:34.000000Z",
          "updated_at"=> "2021-01-14T09:21:34.000000Z"
      ],
      
  ];
	return response(['data'=>$user, "hasNex"=> true,
  "limit"=> 5,
  "offset"=> 1,
  "page"=> 1,
  "total"=> 100]);
});


Route::get('/v1/permission',function(){
	$user = [
      		[
          "id"=> 1,
          "name_en"=> "create",
          "name_kh"=> "បង្កើតថ្មី",
          "status"=> "Active",
          "updated_at"=> "2021-01-14T09:21:34.000000Z"
          ],
          [
            "id"=> 2,
            "name_en"=> "create",
            "name_kh"=> "បង្កើតថ្មី",
            "status"=> "Active",
            "updated_at"=> "2021-01-14T09:21:34.000000Z"
          ],
          [
            "id"=> 3,
            "name_en"=> "create",
            "name_kh"=> "បង្កើតថ្មី",
            "status"=> "Active",
            "updated_at"=> "2021-01-14T09:21:34.000000Z"
          ],
      
  ];
	return response(['data'=>$user, "hasNex"=> true,
  "limit"=> 5,
  "offset"=> 1,
  "page"=> 1,
  "total"=> 100]);
});
// api setting

Route::get('/v1/setting',function() {
	$setting = [
		[
          "id"=> 1,
          "pername"=> "Ven sokvuth",
          "form_date"=> "2021-02-22",
          "to_date"=> "2021-02-22",
          "status"=> "Active",
        ],
        [
          "id"=> 2,
          "pername"=> "Ven sokvuth",
          "form_date"=> "2021-02-22",
          "to_date"=> "2021-02-22",
          "status"=> "Active",
        ],
        [
          "id"=> 3,
          "pername"=> "Ven sokvuth",
          "form_date"=> "2021-02-22",
          "to_date"=> "2021-02-22",
          "status"=> "Active",
        ],
        [
          "id"=> 4,
          "pername"=> "Ven sokvuth",
          "form_date"=> "2021-02-22",
          "to_date"=> "2021-02-22",
          "status"=> "Active",
        ],
	];
	return response(
		[
		'data'=>$setting, 
        "hasNex"=> true,
	    "limit"=> 5,
	    "offset"=> 1,
	    "page"=> 1,
	    "total"=> 100
		]);
});


Route::get('/v1/payment',function() {
	$data = [
		[
      "id"=> 1,
      "dateRequest" => "2021-12-04",
      "paymentType"=> "test",
      "ccy"=> "USD",
      "amount"=> "300",
      "status"=> "1",
      "attachmentFile"=> "default",
      "requestBy"=> "sokvuth",
      "rejectReason"=> "submit wrong data"
    ],
    [
      "id"=> 2,
      "dateRequest" => "2021-12-04",
      "paymentType"=> "test",
      "ccy"=> "USD",
      "amount"=> "300",
      "status"=> "1",
      "attachmentFile"=> "default",
      "requestBy"=> "sokvuth",
      "rejectReason"=> "submit wrong data"
    ],
    [
      "id"=> 3,
      "dateRequest" => "2021-12-04",
      "paymentType"=> "test",
      "ccy"=> "USD",
      "amount"=> "300",
      "status"=> "1",
      "attachmentFile"=> "default",
      "requestBy"=> "sokvuth",
      "rejectReason"=> "submit wrong data"
    ],

        
	];
	return response(
		[
		'data'=>$data, 
        "hasNex"=> true,
	    "limit"=> 5,
	    "offset"=> 1,
	    "page"=> 1,
	    "total"=> 100
		]);
});