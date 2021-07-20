<?php

namespace App\Providers;

use App\Models\Contact;
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
        $notifications = [];
        $notification_count = 0;
        if (Schema::hasTable('contacts'))
        {
            $notification_count = Contact::where('read_unread','=',0)
                ->get();

            $notifications = Contact::get();
        }

        View::share([
            'notification_count' => count($notification_count),
            'notifications'=>$notifications
        ]);
    }
}
