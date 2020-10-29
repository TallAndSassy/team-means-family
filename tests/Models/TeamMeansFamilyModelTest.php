<?php

namespace TallAndSassy\TeamMeansFamily\Tests\Feature\Models;

use TallAndSassy\TeamMeansFamily\Models\TeamMeansFamilyModel;
use TallAndSassy\TeamMeansFamily\Tests\TestCase;

class TeamMeansFamilyModelTest extends TestCase
{
    /** @test */
    public function it_can_create_a_model()
    {
        $model = TeamMeansFamilyModel::create(['name' => 'John']);
        $this->assertDatabaseCount('team-means-family', 1);
        $this->assertEquals('JOHN', $model->getUpperCasedName());
    }
}
