<?php

namespace App\Providers;
use App\Providers\routes;
use Illuminate\Support\ServiceProvider;
use OpenAdmin\Admin\Admin;
use OpenAdmin\Admin\Facades\Admin as FacadesAdmin;

class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        FacadesAdmin::routes(function ($router) {
            $router->group(['middleware' => ['web']], function ($router) {
                // Define admin routes here
            });
        });
    }

    public function register()
    {
        //
    }
}

