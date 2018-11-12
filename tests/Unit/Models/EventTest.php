<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    /*public function testExample()
    {
        $this->assertTrue(true);
    }*/

    public function testEventDatesIsCarbon()
    {
        $event = factory(\App\Event::class)->make();
        $this->assertTrue(is_a($event->started_at, 'Illuminate\Support\Carbon'));
    }

    public function testEventDescIsTEST()
    {
        $event = factory(\App\Event::class)->make();
        $this->assertTrue($event->description === 'TEST');
    }

    public function testEventDescIsNotTEST()
    {
        $event = factory(\App\Event::class)->states('wrong_description')->make();
        $this->assertTrue($event->description === 'TEST');
    }
}
