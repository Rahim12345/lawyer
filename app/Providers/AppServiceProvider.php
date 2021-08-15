<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Evaluation;
use App\Models\Service;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        $notifications = [];
        $notification_count = [];
        $evaluations = [];
        $evaluation_count = [];
        $services = [];
        if (Schema::hasTable('contacts'))
        {
            $notification_count = Contact::where('read_unread','=',0)
                ->get();

            $notifications = Contact::get();
        }

        if (Schema::hasTable('evaluations'))
        {
            $evaluation_count = Evaluation::where('read_unread','=',0)
                ->get();

            $evaluations = Evaluation::get();
        }

        if (Schema::hasTable('services'))
        {
            $services = Service::orderBy('id','desc')->get();
        }

        View::share([
            'notification_count' => count($notification_count) + count($evaluation_count) ,
            'contact_notification_count' => count($notification_count) ,
            'evaluations_notification_count' => count($evaluation_count) ,
            'notifications'=>$notifications,
            'evaluations'=>$evaluations,
            'services'=>$services
        ]);
    }
}
