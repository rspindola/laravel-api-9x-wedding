<?php

namespace App\Providers;

use App\Contracts\ConfirmationRepositoryInterface;
use App\Contracts\GodparentsRepositoryInterface;
use App\Repositories\ConfirmationRepository;
use App\Repositories\GodparentsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ConfirmationRepositoryInterface::class, ConfirmationRepository::class);
        $this->app->bind(GodparentsRepositoryInterface::class, GodparentsRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
