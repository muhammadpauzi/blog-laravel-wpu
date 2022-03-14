<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;
use App\View\Components\PostCard;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('post-card', PostCard::class);

        Gate::define('admin', function (User $user) {
            return $user->is_admin;
        });
    }
}
