<?php

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
        // $this->call(UsersTableSeeder::class);

         $faker = Faker\Factory::create(); //import library faker

        $limit = 20; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('user')->insert([ //mengisi datadi database
                'nama' => $faker->name,
                'username' => $faker->username, //email unique sehingga tidak ada yang sama
                'email' => $faker->email,
                'password' => $faker->password,
            ]);
        }
    }
}
