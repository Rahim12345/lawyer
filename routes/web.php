<?php

use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\notificationsController;
use App\Http\Controllers\Admin\subsciberController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Front\contactController;
use App\Http\Controllers\Front\homeController;
use App\Http\Controllers\settingController;
use Illuminate\Support\Facades\Route;

Route::get( '/login', [ loginController::class, 'login' ] )
    ->name( 'login' );

Route::post( 'login', [ loginController::class, 'loginPost' ] )
    ->name( 'login.post' );

Route::get( 'logout', [ loginController::class, 'logout' ] )
    ->name( 'logout' )
    ->middleware( 'auth' );

Route::get('/',[ homeController::class,'index' ])
    ->name('front.home');

Route::get('contact', [ contactController::class,'index'] )
    ->name('front.contact');

Route::post('subscribe', [ contactController::class,'subscribe'] )
    ->name('front.subscribe');

Route::post('contact-submittion', [ contactController::class,'sendEmail'] )
    ->name('front.contact.store');


Route::group(['prefix'=>'admin','middleware'=>['auth']],function (){
    Route::get('dashboard', [ dashboardController::class,'index'] )
        ->name('admin.dashboard');

    Route::get('settings', [ settingController::class,'index'] )
        ->name('admin.settings');

    Route::post('settings', [ settingController::class,'store'] )
        ->name('admin.settings.store');

    Route::get('notifications', [ notificationsController::class,'index'] )
        ->name('admin.notifications');

    Route::get('single-notification/{id}', [ notificationsController::class,'show'] )
        ->name('admin.notification.show');

    Route::get('subscribers',[subsciberController::class,'index'])
        ->name('admin.subscribers');
});
