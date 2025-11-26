<?php

namespace App\Providers;

use App\Services\UserService;
use App\Services\ClientService;
use App\Reposities\UserReposity;
use App\Reposities\ClientReposity;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\Services\UserServiceInterface;
use App\Interfaces\Services\ClientServiceInterface;
use App\Interfaces\Reposities\UserReposityInterface;
use App\Interfaces\Reposities\ClientReposityInterface;

class ConnectorProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserServiceInterface::class,UserService::class);
        $this->app->bind(UserReposityInterface::class,UserReposity::class);
        $this->app->bind(ClientServiceInterface::class,ClientService::class);
        $this->app->bind(ClientReposityInterface::class,ClientReposity::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
