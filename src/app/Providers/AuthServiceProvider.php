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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
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
        'App\Models\Admin\SocialMediaItem' => 'App\Policies\SocialMediaPolicy',
        
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

        // Gate::before(function ($user, $ability) {
        //     if ($user->hasRole('admin')) {
        //         return true;
        //     }
        // });

        Gate::define('isAdmin', function ($user) {
            return $user->hasRole('admin');
        });

        Gate::define('isSeller', function ($user) {
            return $user->hasRole('seller');
        });

        Gate::define('isEditor', function ($user) {
            return $user->hasRole('editor');
        });
    }
}
