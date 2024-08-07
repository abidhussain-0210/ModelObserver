<?php

namespace App\Observers;

use App\Models\Influencer;

class InfluencerObserver
{
    /**
     * Handle the Influencer "created" event.
     */
    public function created(Influencer $influencer): void
    {
        //
    }

    /**
     * Handle the Influencer "updated" event.
     */
    public function updated(Influencer $influencer): void
    {
        //
    }

    /**
     * Handle the Influencer "deleted" event.
     */
    public function deleted(Influencer $influencer): void
    {
        $influencer->post()->delete();
    }

    /**
     * Handle the Influencer "restored" event.
     */
    public function restored(Influencer $influencer): void
    {
        //
    }

    /**
     * Handle the Influencer "force deleted" event.
     */
    public function forceDeleted(Influencer $influencer): void
    {
        //
    }
}
