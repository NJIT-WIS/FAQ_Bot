<?php

/**
 * Created by PhpStorm.
 * User: lukas
 * Date: 11/7/18
 * Time: 6:37 PM
 */


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function ($u) {
            //$u->posts()->save(factory(App\Post::class)->make());
        });
        factory(App\User::class, 50)->create();
    }
}
