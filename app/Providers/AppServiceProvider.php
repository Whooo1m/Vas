<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\AdminPolicy;


use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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

        VerifyCsrfToken::except([
            '/posts',
            '/posts/*'
        ]);

        Gate::policy(User::class, AdminPolicy::class);
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

    }
}
