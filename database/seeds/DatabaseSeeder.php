<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.


        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
//        for ($i = 0; $i < 50; $i++) {
//            \App\User::create([
//                'name' => $faker->sentence,
//                'email' => $faker->email,
//                'password' => $faker->password(8, 15),
//                'api_token' => $faker->name('Jll7q0BSijLOrzaOSm5Dr5hW9cJRZAJKOzvDlxjKCXepwAeZ7JR6YP5zQqnw')
//            ]);
//        }
        for ($i = 0; $i < 50; $i++) {
            \App\Job::create([
                'title' => $faker->sentence,
                'description' => $faker->sentence,
                'organization' => $faker->sentence,
                'type' => $faker->word('U'),
                'salary' => $faker->numberBetween(10000,50000),
                'date' => $faker->date('1996-08-26')
            ]);
        }
    }
}
