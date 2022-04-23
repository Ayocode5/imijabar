<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Admin\Blog' => 'App\Policies\BlogPolicy',
        'App\Models\Admin\Category' => 'App\Policies\BlogCategoryPolicy',
        'App\Models\Admin\Event' => 'App\Policies\EventPolicy',
        'App\Models\Admin\EventCategory' => 'App\Policies\EventCategoryPolicy',
        'App\Models\Admin\Sport' => 'App\Policies\SportPolicy',
        'App\Models\Admin\Sponsor' => 'App\Policies\SponsorPolicy',
        'App\Models\Admin\GalleryCategory' => 'App\Policies\GalleryCategoryPolicy',
        'App\Models\Admin\Photo' => 'App\Policies\PhotoPolicy',
        'App\Models\Admin\Video' => 'App\Policies\VideoPolicy',
        'App\Models\Admin\TeamMember' => 'App\Policies\CommitteePolicy',
        'App\Models\Admin\CommitteeGreeting' => 'App\Policies\CommitteePolicy',
        'App\Models\Admin\SocialMediaItem' => 'App\Policies\SocialMediaPolicy',
        'App\Models\Admin\Subscriber' => 'App\Policies\SubscribersPolicy',
        'App\Models\Admin\Advertisement' => 'App\Policies\AdvertisementPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /* define a admin user role */
        Gate::before(function ($user, $ability) {
            if ($user->hasRole('admin')) {
                return true;
            }
        });

        Gate::define('isAdmin', function ($user) {
            return $user->hasRole('admin');
        });

        //Registration Controller Gates 
        Gate::define('view-registration', function ($user) {
            return in_array('view-registration', $user->getPermissionsViaRoles()->pluck('name')->toArray());
        });

        //File Manager Controller Gates 
        Gate::define('view-file-manager', function ($user) {
            return in_array('view-file-manager', $user->getPermissionsViaRoles()->pluck('name')->toArray());
        });
    }
}
