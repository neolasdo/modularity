<?php

namespace App\Modules;
use File;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;

class ServiceProvider extends  \Illuminate\Support\ServiceProvider
{
    public function boot(){
        $listModule = array_map('basename', File::directories(__DIR__));
        foreach ($listModule as $module) {
            if(file_exists(__DIR__.'/'.$module.'/apiRoutes.php')) {
                $this->loadRoutesFrom(__DIR__.'/'.$module.'/apiRoutes.php');
            }
            if(file_exists(__DIR__.'/'.$module.'/routes.php')) {
                $this->loadRoutesFrom(__DIR__.'/'.$module.'/routes.php');
            }
            if(is_dir(__DIR__.'/'.$module.'/Views')) {
                $this->loadViewsFrom(__DIR__.'/'.$module.'/Views', $module);
            }
            if(is_dir(__DIR__.'/'.$module.'/database/migrations')) {
                $this->publishes([
                    __DIR__.'/'.$module.'/database/migrations' => $this->app->databasePath() . '/migrations',
                ], 'migrations');
            }
            if(is_dir(__DIR__.'/'.$module.'/public')) {
                $this->publishes([
                    __DIR__.'/'.$module.'/public' => public_path($module),
                ], 'public');
            }
        }
    }

    public function register(){}
}