<?php

namespace julianelizondo16\bloginstaler;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        /* ------------------------DATABASE-------------------------------------- */
        /*  Base de datos */
        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'Migraciones');
        /* Factories */
        $this->publishes([
            __DIR__ . '/../database/factories' => database_path('factories'),
        ], 'Factories');
        /* Seeders */
        $this->publishes([
            __DIR__ . '/../database/seeders' => database_path('seeders'),
        ], 'Seeders');


        /* ------------------------CONFIG-------------------------------------- */
        $this->publishes([
            __DIR__ . '/../config' => config_path(''),
        ], 'Migraciones');
        /* ------------------------Controlladores-------------------------------------- */
        /* Llamada de controladores */
        $this->publishes([
            __DIR__ . '/Controllers' => app_path('/Http/Controllers'),
        ], 'BlogController');
        $this->publishes([
            __DIR__ . '/Requests' => app_path('/Http/Requests'),
        ], 'BlogRequests');
        $this->publishes([
            __DIR__ . '/Livewire' => app_path('Livewire'),
        ], 'LivewireBlog');
        $this->publishes([
            __DIR__ . '/Console' => app_path('Console'),
        ], 'ConsoleBlog');
        $this->publishes([
            __DIR__ . '/Policies' => app_path('Policies'),
        ], 'PoliciesBlog');
        $this->publishes([
            __DIR__ . '/Observers' => app_path('Observers'),
        ], 'ObserversBlog');
        $this->publishes([
            __DIR__ . '/Providers' => app_path('Providers'),
        ], 'ProvidersBlog');
        /* 
        ------------------------Models-------------------------------------- */
        /* Llamada de los Modelos */
        $this->publishes([
            __DIR__ . '/Models' => app_path('Models'),
        ], 'BlogModels');
        /* 
        ------------------------Imagenes NO STORAGE-------------------------------------- */
        $this->publishes([
            __DIR__ . '/public/img' => public_path('img'),
        ], 'ImagenesCyber');
        $this->publishes([
            __DIR__ . '/public/vendor' => public_path('vendor'),
        ], 'CkeditorPersonal');
        /* 
        ------------------------Vistas-------------------------------------- */
        /*  Llamada de vistas */
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views'),
        ], 'VistasBlog');
        /* 
        ------------------------Rutas-------------------------------------- */
        /*  Llamada de rutas */
        $this->publishes([
            __DIR__ . '/routes' => base_path('routes'),
        ], 'RoutesBlog');
        $this->publishes([
            __DIR__ . '/storage' => base_path('storage'),
        ], 'StorageBlog');
        /* 
        ------------------------Policies y Observers-------------------------------------- */
        /*  Llamada de rutas */
    }
}
