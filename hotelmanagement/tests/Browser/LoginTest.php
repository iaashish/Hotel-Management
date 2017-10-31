<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        // $user = factory(User::class)->create([
        //     // 'name' => 'Joe',
        //     // 'email' => 'Joe@Joe.com',
        //     // 'password' => '123456',
            
        // ]);

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Manager Login')
                    ->type('email', 'Joe@Joe.com')
                    ->type('password', '123456')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
