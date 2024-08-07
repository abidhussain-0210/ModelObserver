<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Influencer;
use App\Models\Post;
use App\Observers\InfluencerObserver;
use App\Observers\PostObserver;

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
        Influencer::observe(InfluencerObserver::class);
        Post::observe(PostObserver::class);

    }
}
