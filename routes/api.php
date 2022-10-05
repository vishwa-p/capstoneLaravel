<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Shoes;
use Illuminate\Support\Facades\DB;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// http://127.0.0.1:8000/api/user
Route::get('/user', function(){

    $user = User::orderBy('id')->get();

    return $user;

});
// http://127.0.0.1:8000/api/shoes
Route::get('/shoes', function(){

    $shoes = Shoes::orderBy('id')->get();

    return $shoes;

});

// http://127.0.0.1:8000/api/user/authenticate
Route::post('/user/authenticate', function(Request $request){
    $email = $request->email;
    $password =  $request->password ;   
    $check=array('email' => $email, 'password' => $password);
    if ( auth()->attempt( $check ) ) {
        return response()->json(['status'=>200,'data'=>"Yes"]);
    }
    return response()->json(['status'=>401,'data'=>"No"]);

});

// http://127.0.0.1:8000/api/user/register
Route::post('/user/register', function(Request $request) {
    // return User::create($request->all);
    $user = new User();
    $user->first = $request->first;
    $user->last = $request->last;
    $user->email = $request->email;
    $user->password = bcrypt( $request->password );
    // $user->role = $request->role;

   
    $user->save();
    return response()->json([
        "message" => "User Added.."
    ], 201);
});