<?php

namespace App\Providers;

use App\Contracts\ConfirmationRepositoryInterface;
use App\Contracts\GodparentsRepositoryInterface;
use App\Contracts\GuestRepositoryInterface;
use App\Contracts\MessageRepositoryInterface;
use App\Repositories\ConfirmationRepository;
use App\Repositories\GodparentsRepository;
use App\Repositories\GuestRepository;
use App\Repositories\MessageRepository;
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
        $this->app->bind(MessageRepositoryInterface::class, MessageRepository::class);
        $this->app->bind(GuestRepositoryInterface::class, GuestRepository::class);
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
