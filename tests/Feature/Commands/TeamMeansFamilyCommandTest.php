<?php


namespace TallAndSassy\TeamMeansFamily\Tests\Feature\Commands;

class TeamMeansFamilyCommandTest extends \TallAndSassy\TeamMeansFamily\Tests\TestCase
{
    /** @test */
    public function test_command_works()
    {
        $this->artisan('tassy:somecommand')->assertExitCode(0);
        $this->artisan('tassy:somecommand')->expectsOutput('TallAndSassy/TeamMeansFamily/hw/tbd');
    }
}
