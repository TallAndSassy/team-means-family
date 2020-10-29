<?php
/*
 * Q: How do I  override  like __('welcome'), vs.  __('tassy::blah.OtherKey') in the main app
 * A: You must(?) override with /resources/lang/en.json in the main app
 * We call this file domainx.php, but you could also make 'geetings.php' for standard plugin-related salutations
*/

return [
    'Hello' => 'Hi', // Access this in a blade via {{ __('tassy::domainx.Hello') }} or {{trans('...)}}
    // Note: language prefix does NOT need to match your blade prefix.  This is set in the ServiceProvider
    // You can make additional domains - just make a new file called 'blah.php' and access it via  __('tassy::blah.OtherKey')
    // Override this in your app by making resources/lang/vendor/tassy/en/domainx.php #Note: it is 'vendor' not 'tallandsassy' and 'tassy', not 'tassy' or 'team-means-family'
    // view sample_blade.blade.php for examples on how to utilize these.
    'welcome' => 'Welcome, :name', //  access via: __('tassy::domainx.welcome', ['name' => 'dayle']);
    /* https://laravel.com/docs/8.x/localization
    If your placeholder contains all capital letters, or only has its first letter capitalized, the translated value will be capitalized accordingly:
    'welcome' => 'Welcome, :NAME', // Welcome, DAYLE
    'goodbye' => 'Goodbye, :Name', // Goodbye, Dayle
    */
];
