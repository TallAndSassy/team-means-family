<?php


namespace TallAndSassy\TeamMeansFamily\Tests\Feature\Http\Controllers;

class TeamMeansFamilyControllerTest extends \TallAndSassy\TeamMeansFamily\Tests\TestCase
{
    /** @test */
    public function global_urls_returns_ok()
    {
        // Test hard-coded routes...
        $this
            ->get('/grok/TallAndSassy/TeamMeansFamily/sample_string')
            ->assertOk()
            ->assertSee('Hello TeamMeansFamily string via global url.');
        $this
            ->get('/grok/TallAndSassy/TeamMeansFamily/sample_blade')
            ->assertOk()
            ->assertSee('Hello TeamMeansFamily from blade in TallAndSassy/TeamMeansFamily/groks/sample_blade');
        $this
            ->get('/grok/TallAndSassy/TeamMeansFamily/controller')
            ->assertOk()
            ->assertSee('Hello TeamMeansFamily from: TallAndSassy\TeamMeansFamily\Http\Controllers\TeamMeansFamilyController::sample');
    }


    /** @test */
    public function prefixed_urls_returns_ok()
    {
        // Test user-defined routes...
        // Reproduce in routes/web.php like so
        //  Route::tassy('staff');
        //  http://test-tallandsassy.test/staff/TallAndSassy/TeamMeansFamily/string
        //  http://test-tallandsassy.test/staff/TallAndSassy/TeamMeansFamily/blade
        //  http://test-tallandsassy.test/staff/TallAndSassy/TeamMeansFamily/controller
        $userDefinedBladePrefix = $this->userDefinedBladePrefix; // user will do this in routes/web.php Route::tassy('url');

        // string
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/TeamMeansFamily/sample_string")
            ->assertOk()
            #->assertSee('hw(TallAndSassy\TeamMeansFamily\Http\Controllers\TeamMeansFamilyController)');
        ->assertSee('Hello TeamMeansFamily string via blade prefix');

        // blade
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/TeamMeansFamily/sample_blade")
            ->assertOk()
            ->assertSee('Hello TeamMeansFamily from blade in TallAndSassy/TeamMeansFamily/groks/sample_blade');

        // controller
        $this
            ->get("/$userDefinedBladePrefix/TallAndSassy/TeamMeansFamily/controller")
            ->assertOk()
            ->assertSee('Hello TeamMeansFamily from: TallAndSassy\TeamMeansFamily\Http\Controllers\TeamMeansFamilyController::sample');
    }
}
