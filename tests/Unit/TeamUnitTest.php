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
    public function add_new_team()
    {
        $team = factory(Team::class)->create([
            'code'=> 'FRA',
            'name'=> 'France',
        ]);

        $this->assertEquals('FRA', $team->code);
        $this->assertEquals('France', $team->name);

    }
}
