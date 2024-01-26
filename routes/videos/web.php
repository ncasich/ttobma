<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Videos\VideosController;

Route::controller(VideosController::class)->group(function () {
    Route::get('videos', 'index');
});

//Route::group(['namespace' => 'Videos'], function () {
//    Route::group(['prefix' => 'videos', 'as' => 'videos.',], function () {
//        Route::get('list', ['as' => 'list', 'uses' => 'VideosController@videos', 'middleware'=>'follower-reads']);
//        Route::get('get-videos', ['as' => 'get-videos', 'uses' => 'VideosController@getVideos', 'middleware'=>'follower-reads']);
//        Route::group(['middleware' => ['role:admin']], function () {
//            Route::get('index', ['as' => 'index', 'uses' => 'VideosController@index', 'middleware'=>'follower-reads']);
//            Route::get('{video?}', ['as' => 'edit', 'uses' => 'VideosController@edit']);
//            Route::post('{video?}', ['as' => 'store', 'uses' => 'VideosController@store']);
//            Route::delete('{video}', ['as' => 'remove', 'uses' => 'VideosController@delete']);
//        });
//    });
//
//    Route::get('video/{video?}', ['as' => 'videos.view', 'uses' => 'VideosController@view', 'middleware'=>'follower-reads']);
//});
