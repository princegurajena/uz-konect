<?php

use App\ContactDetail;
use App\Menu;
use App\Restaurant;
use App\User;
use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

        // User
        $user  =  factory(User::class)->create();

        $restaurants = factory(Restaurant::class , 5 )->create();

        /** @var Restaurant $restaurant */
        foreach ($restaurants as $restaurant)
        {
            factory(ContactDetail::class)->create([
                'contact_details_id' => $restaurant->id,
                'contact_details_type' => Restaurant::class
            ]);

            factory(Menu::class , 5)->create([
               'restaurant_id' => $restaurant->id
            ]);
        }
    }
}
