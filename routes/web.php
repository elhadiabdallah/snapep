<?php

use Illuminate\Support\Facades\Route;
Route::get('tet', function () {
    return response()->json('$data', 200);
});
Route::get('/{any}', function(){
return view('home');
})->where('any', '.*');