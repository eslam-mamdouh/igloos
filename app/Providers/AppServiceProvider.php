<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
<<<<<<< HEAD

=======
>>>>>>> d3a5f2cf6a08051e68f5dbabad3996f2b6990ec6
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        
         Schema::defaultStringLength(191); 
=======
        //
        Schema::defaultStringLength(191);
>>>>>>> d3a5f2cf6a08051e68f5dbabad3996f2b6990ec6
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
