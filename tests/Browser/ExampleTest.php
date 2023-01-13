<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }



    public function testBasicExampleTwo(): void
    {
        $this->markTestSkipped('Test sin terminar');
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('')
                ->clickLink('')
                ->waitForText('')
                ->type('email')
                ->type('password')
                ->click('button',)
                ->assertPathIs('');

            $browser->type('saletitles', 'taylor@laravel.com');
        });



    }

    public function testBasicExampleThree(): void
    {
        $this->markTestSkipped('Test sin terminar');
        $this->browse(function (Browser $browser) {
            $browser
                ->loginAs(User::find(1))
                ->visit('home')
                ->assertSee('');

        });



    }
}
