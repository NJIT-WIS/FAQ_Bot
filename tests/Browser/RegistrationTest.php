<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegistrationTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testRegistration()
    {
        $user = factory(User::class)->make();
        $this->browse(function ($browser) use ($user) {
            $browser->visit('/register')
                ->type('name', 'Kyle Payne')
                ->type('email', 'kjp44@njit.edu')
                ->type('password', 'secret')
                ->type('password_confirmation', 'secret')
                ->press('Register')
                ->assertPathIs('/home')
                ->assertSee('You are logged in!');
        });
    }
}