<?php

use App\Http\Controllers\Admin\blogController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\notificationsController;
use App\Http\Controllers\Admin\serviceController;
use App\Http\Controllers\Admin\subsciberController;
use App\Http\Controllers\Admin\vekilController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\Front\aboutController;
use App\Http\Controllers\Front\contactController;
use App\Http\Controllers\Front\homeController;
use App\Http\Controllers\settingController;
use App\Http\Controllers\tagController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Ladumor\OneSignal\OneSignal;

Route::get( '/login', [ loginController::class, 'login' ] )
    ->name( 'login' );

Route::post( 'login', [ loginController::class, 'loginPost' ] )
    ->name( 'login.post' );

Route::get( 'logout', [ loginController::class, 'logout' ] )
    ->name( 'logout' )
    ->middleware( 'auth' );

Route::get('/',[ homeController::class,'index' ])
    ->name('front.home');

Route::get('blog', [ blogController::class,'frontIndex'] )
    ->name('front.blog');

Route::get('blog/{slug}', [ blogController::class,'frontSingle'] )
    ->name('front.single.blog');

Route::get('category/{slug}', [ blogController::class,'Category'] )
    ->name('front.category');

Route::get('tag/{slug}', [ blogController::class,'Tag'] )
    ->name('front.tag');

Route::get('contact', [ contactController::class,'index'] )
    ->name('front.contact');

Route::post('subscribe', [ contactController::class,'subscribe'] )
    ->name('front.subscribe');

Route::post('contact-submittion', [ contactController::class,'sendEmail'] )
    ->name('front.contact.store');

Route::post('search', [ blogController::class,'Search'] )
    ->name('front.search');

Route::post('comment', [ blogController::class,'Comment'] )
    ->name('front.comment');

Route::post('load-comments', [ blogController::class,'loadComment'] )
    ->name('front.load.comments');

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

    Route::get('profile',[loginController::class,'profile'])
        ->name('admin.profile');

    Route::post('profile',[loginController::class,'profileUpdate'])
        ->name('admin.profile.update');

    Route::get('settings', [ settingController::class,'index'] )
        ->name('admin.settings');

    Route::post('settings', [ settingController::class,'store'] )
        ->name('admin.settings.store');

    Route::get('notifications/{slug}', [ notificationsController::class,'index'] )
        ->name('admin.notifications');

    Route::get('single-notification/{type}/{id}', [ notificationsController::class,'show'] )
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

    Route::resource('tag', tagController::class );
    Route::resource('category', categoryController::class );

    Route::resource('blog', blogController::class );
    Route::post('blog-photo', [blogController::class,'upload'])->name('admin.upload.blog.photo');
    Route::post('blog-translate-to-az', [blogController::class,'translateToAz'])->name('admin.blog.translate.to.az');
    Route::post('blog-update', [blogController::class,'myUpdate'])->name('admin.blog.update');
    Route::get('blog-delete/{id}', [blogController::class,'myDelete'])->name('admin.blog.delete');
    Route::post('blog-switcher', [blogController::class,'switcher'])->name('admin.blog.switcher');

});

Route::get('/{lang}',[ homeController::class,'lang' ])
    ->name('front.lang');
