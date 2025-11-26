<?php

namespace App\Providers;

use App\Services\UserService;
use App\Services\ClientService;
use App\Services\TicketService;
use App\Reposities\UserReposity;
use App\Reposities\ClientReposity;
use App\Reposities\TicketReposity;
use Illuminate\Support\ServiceProvider;
use App\Interfaces\Services\UserServiceInterface;
use App\Interfaces\Services\ClientServiceInterface;
use App\Interfaces\Services\TicketServiceInterface;
use App\Interfaces\Reposities\UserReposityInterface;
use App\Interfaces\Reposities\ClientReposityInterface;
use App\Interfaces\Reposities\TickentReposityInterface;

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
        $this->app->bind(TicketServiceInterface::class, TicketService::class);
        $this->app->bind(TickentReposityInterface::class, TicketReposity::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
