<?php

namespace Database\Seeders;

use App\Models\Admin\Event;
use Illuminate\Database\Seeder;
use App\Models\Admin\EventCategory;
use App\Models\Admin\Sponsor;
use App\Models\Admin\Sport;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Event Categories
        $categories = ['Roda Dua', 'Roda Empat'];
        $categoriesPayload = [];
        foreach ($categories as $category) {
            array_push($categoriesPayload, [
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }

        EventCategory::insert($categoriesPayload);

        // Create Event Sports
        $sports = [
            'Drag Race',
            'Sprint Race',
            'Lap Race',
            'Slalom Race'
        ];

        $eventCategoryId = EventCategory::select('id')->get()->pluck('id')->toArray();
        $sportsPayload = [];
        foreach ($sports as $key => $sport) {
            array_push($sportsPayload, [
                'category_id' => $eventCategoryId[array_rand($eventCategoryId, 1)],
                'name' => $sport,
                'slug' => Str::slug($sport),
            ]);
        }

        Sport::insert($sportsPayload);


        // Create Sponsor
        $sponsors = ['Astra Honda Motor', 'Yamaha'];
        $sponsorsPayload = [];
        foreach ($sponsors as $key => $sponsor) {
            array_push($sponsorsPayload, [
                'name' => $sponsor,
                'slug' => Str::slug($sponsor),
                'image' => "sponsor-$key.jpeg"
            ]);
        }

        Sponsor::insert($sponsorsPayload);


        // Create Events
        $eventsPayload = [];

        foreach (range(1, 100) as $num) {
            array_push($eventsPayload, [
                'event_name' => "Perlombaan Nasional ke $num",
                'event_slug' => "perlombaan-nasional-ke-$num",
                'event_organizer' => "Bapak Jokowi",
                'event_content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?",
                'event_content_short' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
                'event_start_date' => date_format(date_create('2022-01-28 0:0:0'), 'Y-m-d h:m:s'),
                'event_end_date' => date_format(date_create('2022-02-28 0:0:0'), 'Y-m-d h:m:s'),
                'event_location' => 'Jl. Gatot Subroto No.1, RT.1/RW.3, Gelora, Kecamatan Tanah Abang,',
                'event_location_city' => 'Jakarta Pusat',
                'event_location_province' => 'DKI Jakarta',
                'event_map' => "https://www.google.com/maps/d/viewer?ie=UTF8&t=h&oe=UTF8&msa=0&mid=1pRr96dk8bzZtAoXcOJjjIJXcmjU&ll=-6.175392999999987%2C106.82702099999997&z=17",
                'event_featured_photo' => 'event-featured.jpeg',
                'event_link' => 'https://www.google.com',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        Event::insert($eventsPayload);


        $events_id = Event::select('id')->get()->pluck('id');
        $sports_id = Sport::select('id')->get()->pluck('id')->toArray();
        $sponsors_id = Sponsor::select('id')->get()->pluck('id')->toArray();

        $event_sport_payload = [];
        $event_sponsor_payload = [];

        foreach ($events_id as $key => $event_id) {
            array_push($event_sport_payload, [
                'event_id' => $event_id,
                'sport_id' => $sports_id[array_rand($sports_id, 1)],
            ]);
        }

        foreach ($events_id as $key => $event_id) {
            array_push($event_sponsor_payload, [
                'event_id' => $event_id,
                'sponsor_id' => $sponsors_id[array_rand($sponsors_id, 1)],
            ]);
        }

        DB::table('event_sport')->insert($event_sport_payload);
        DB::table('event_sponsor')->insert($event_sponsor_payload);
    }
}
