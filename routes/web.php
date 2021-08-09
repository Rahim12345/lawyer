<?php

use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\notificationsController;
use App\Http\Controllers\Admin\serviceController;
use App\Http\Controllers\Admin\subsciberController;
use App\Http\Controllers\Admin\vekilController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Front\aboutController;
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

Route::get('attorneys', [ vekilController::class,'vekiller'] )
    ->name('front.attorneys');

Route::get('about', [ aboutController::class,'index'] )
    ->name('front.about');

Route::get('services', [ serviceController::class,'frontService'] )
    ->name('front.services');

Route::get('services/{slug}', [ serviceController::class,'frontSingleService'] )
    ->name('front.single.services');

Route::post('get-free-case-evaluation', [ serviceController::class,'getFreeCaseEvaluation'] )
    ->name('front.get.free.case.evaluation');


Route::group(['prefix'=>'admin','middleware'=>['auth']],function (){
    Route::get('dashboard', [ dashboardController::class,'index'] )
        ->name('admin.dashboard');

    Route::get('settings', [ settingController::class,'index'] )
        ->name('admin.settings');

    Route::post('settings', [ settingController::class,'store'] )
        ->name('admin.settings.store');

    Route::get('notifications/{slug}', [ notificationsController::class,'index'] )
        ->name('admin.notifications');

    Route::get('single-notification/{id}', [ notificationsController::class,'show'] )
        ->name('admin.notification.show');

    Route::get('subscribers',[subsciberController::class,'index'])
        ->name('admin.subscribers');

    Route::get('vekiller',[vekilController::class,'index'])
        ->name('admin.vekiller.index');

    Route::get('vekiller-add',[vekilController::class,'create'])
        ->name('admin.vekiller.create');

    Route::post('vekiller-store',[vekilController::class,'store'])
        ->name('admin.vekiller.store');

    Route::post('vekiller-delete',[vekilController::class,'delete'])
        ->name('admin.vekiller.delete');

    Route::get('vekiller/{id}',[vekilController::class,'edit'])
        ->name('admin.vekiller.edit');

    Route::post('vekiller-update',[vekilController::class,'update'])
        ->name('admin.vekiller.update');

    Route::resource('about',\App\Http\Controllers\Admin\aboutController::class);

    Route::resource('service', serviceController::class);
    Route::post('service-photo-az', [serviceController::class,'upload'])->name('admin.upload.service.photo');
    Route::post('service-translate-to-az', [serviceController::class,'translateToAz'])->name('admin.service.translate.to.az');

});

Route::get('/{lang}',[ homeController::class,'lang' ])
    ->name('front.lang');
