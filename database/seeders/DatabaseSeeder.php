<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        Listing::factory(6)->create();

    //     Listing::create([
    //         'id' => 1,
    //         'title' => "Ikan Pari",
    //         'tags' => 'Fish',
    //         'company' => 'PT Ikan Pari Jaya',
    //         'location' => 'Sidoarjo, Jawa Timur',
    //         'email' => 'ikanparijaya@gmail.com',
    //         'website' => 'www.ikanpari.com',
    //         'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta tortor vel quam consequat semper. Pellentesque sit amet cursus lectus, ac congue nulla. Proin egestas pellentesque dui, sagittis interdum nulla convallis vitae. Maecenas faucibus ullamcorper gravida. Nam nec pulvinar sem. Ut feugiat luctus nulla, a consectetur arcu sagittis a. Nunc a maximus nibh.'
    //     ]);

    //     Listing::create([
    //         'id' => 2,
    //         'title' => 'Ikan Hiu',
    //         'tags' => 'Fish',
    //         'company' => 'PT Ikan Hiu Makmur',
    //         'location' => 'Bogor, Jawa Barat',
    //         'email' => 'ikanhiumakmur@gmail.com',
    //         'website' => 'www.ikanhiu.com',
    //         'description' => 'Nullam semper tincidunt erat, eget vulputate dui maximus ac. Donec non dui placerat, maximus odio sit amet, convallis nunc. Curabitur euismod gravida tortor sed interdum. Praesent mattis est quis tellus consectetur, consectetur mollis erat vehicula. Vivamus id neque urna. Proin id massa mollis, condimentum dolor sed, varius sem. Nam eu neque sit amet augue fermentum commodo. Ut sit amet nunc ac orci pellentesque fringilla eget eget orci.'
    //     ]);
    }
}
