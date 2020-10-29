<?php

namespace TallAndSassy\TeamMeansFamily;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TallAndSassy\TeamMeansFamily\TeamMeansFamily
 */
class TeamMeansFamilyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'team-means-family';
    }
}
