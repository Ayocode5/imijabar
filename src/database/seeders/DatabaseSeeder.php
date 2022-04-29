<?php

namespace Database\Seeders;

use App\Models\Admin\CommitteeGreeting;
use App\Models\Admin\Community;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // CommitteeGreeting::factory(10)->create();
        // Community::factory(100)->create();

       $this->call([
           AdminSeeder::class,
           GeneralSettingSeeder::class,
           RoleAndPermissionSeeder::class,
           PageAboutItemSeeder::class,
           PageEventItemSeeder::class,
           PageNewsItemSeeder::class,
           PageHomeItemSeeder::class,
           PageGalleryItemSeeder::class,
        //    CommitteeSeeder::class,
           EmailTemplateSeeder::class,
        //    SubscriberSeeder::class,
           WebsiteMenuStatusSeeder::class,
           DynamicPageRegistrationEventSeeder::class,
           DynamicPageADPage::class,
           DynamicPageARTPage::class,
           DynamicPageClubRegistration::class,
           DynamicPageKIS::class,
           DynamicPageKTA::class,
        //    NewsSeeder::class,
        //    EventSeeder::class,
        //    GallerySeeder::class,
       ]);
    }
}
