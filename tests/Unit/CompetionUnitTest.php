<?php

namespace Tests\Unit;

use App\Competition;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompetionUnitTest extends TestCase
{
    /**
     * A basic @test example.
     *
     * @return void
     */
    public function add_new_competion()
    {
        $competition = factory(Competition::class)->create([
            'name'=> 'Coupe du monde 2018',
            'start_at' => new Carbon('first day of june 2018'),
            'end_at' => new Carbon('last day of june 2018'),
        ]);

        $this->assertEquals('Coupe du monde 2018', $competition->name);
        $this->assertEquals(new Carbon('first day of june 2018'), $competition->start_at);
        $this->assertEquals(new Carbon('first day of june 2018'), $competition->end_at);
    }
}
