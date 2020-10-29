<?php

namespace TallAndSassy\TeamMeansFamily\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMeansFamilyModel extends Model
{
    public $gaurded = [];// Defualt to no mass assignements
    public $fillable = ['name'];
    public $table = 'team-means-family';

    public function getUpperCasedName() : string
    {
        return strtoupper($this->name);
    }
}
