<?php

namespace TallAndSassy\TeamMeansFamily\Commands;

use Illuminate\Console\Command;

/* This original file is a template.  Feel free to copy and rename, as needed.
For each 'Command' in this directory, there should be a corresponding
entry in src/TeamMeansFamilyServiceProvider.php/boot/this->commands([...


*/

class TeamMeansFamilyCommand extends Command
{
    public $signature = 'tassy:somecommand'; # Hint: The ':' groups the command under a similiar heading.

    public $description = 'Default description for TallAndSassy/TeamMeansFamily command';

    public $help = <<<EOD
    Sample: Your extendended instructions goes here.
    These instructions should be more thurough than the description.
    EOD;
    
    public function handle()
    {
        $this->comment('TallAndSassy/TeamMeansFamily/hw/tbd');
    }
}
