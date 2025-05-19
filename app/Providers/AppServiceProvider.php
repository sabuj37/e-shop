<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\businessTable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //global variable
       
        
        view()->composer('*',function(View $view){
             $businessTable = businessTable::all();
            $view->with('config',$businessTable);
        }
            
        );
    }
}
