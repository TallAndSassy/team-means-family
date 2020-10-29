<?php

namespace TallAndSassy\TeamMeansFamily;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use TallAndSassy\TeamMeansFamily\Commands\TeamMeansFamilyCommand;
use TallAndSassy\TeamMeansFamily\Http\Controllers\TeamMeansFamilyController;

class TeamMeansFamilyServiceProvider extends ServiceProvider
{
    public static string $blade_prefix = "tassy"; #tassy is a template term
    public static string $language_prefix = "tassy"; #tassy is a template term

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes(
                [
                    __DIR__ . '/../config/team-means-family.php' => config_path('team-means-family.php'),
                ],
                'config'
            );

            $this->publishes(
                [
                    __DIR__ . '/../resources/views' => base_path('resources/views/vendor/team-means-family'),
                ],
                'views'
            );

            $migrationFileName = 'create_team_means_family_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes(
                    [
                        __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path(
                            'migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName
                        ),
                    ],
                    'migrations'
                );
            }

            $this->publishes([
                 __DIR__.'/../resources/public' => public_path('tallandsassy/team-means-family'),
                ], ['public']);

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('tallandsassy/team-means-family'),
            ], 'grok.views');*/

            // Publishing the translation files.
            $this->loadTranslationsFrom(__DIR__ . '/../resources/lang/', static::$language_prefix);
            if ($this->app->runningInConsole()) {
                $this->publishes([
                    __DIR__.'/../resources/lang' => "{$this->app['path.lang']}/vendor/".static::$language_prefix,
                    ], 'tallandsassy.team-means-family');
            }



            // Registering package commands.
            $this->commands(
                [
                    TeamMeansFamilyCommand::class,
                ]
            );
        }

        // Translation
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang/', static::$language_prefix);
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/lang' => "{$this->app['path.lang']}/vendor/".static::$language_prefix,
                ], 'tallandsassy.team-means-family');
        }



        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tassy');


        Route::macro(
            'tassy',
            function (string $prefix) {
                Route::prefix($prefix)->group(
                    function () {
                        // Prefix Route Samples -BEGIN-
                        // Sample routes that only show while developing...
                        if (App::environment(['local', 'testing'])) {
                            // prefixed url to string
                            Route::get(
                                '/TallAndSassy/TeamMeansFamily/sample_string', // you will absolutely need a prefix in your url
                                // like: 'https://localhost/tassy/TallAndSassy/TeamMeansFamily/sample_string'
                                function () {
                                    return "Hello TeamMeansFamily string via blade prefix";
                                }
                            );

                            // prefixed url to blade view
                            Route::get(
                                '/TallAndSassy/TeamMeansFamily/sample_blade',
                                function () {
                                    return view('tassy::sample_blade');
                                }
                            );

                            // prefixed url to controller
                            Route::get(
                                '/TallAndSassy/TeamMeansFamily/controller',
                                [TeamMeansFamilyController::class, 'sample']
                            );
                        }
                        // Prefix Route Samples -END-

                        // TODO: Add your own prefixed routes here...
                    }
                );
            }
        );
        Route::tassy('tassy'); // This works. http://test-jet.test/tassy/TallAndSassy/TeamMeansFamily/string
        // They are addatiive, so in your own routes/web.php file, do Route::tassy('staff'); to
        // make http://test-jet.test/staff/TallAndSassy/TeamMeansFamily/string work


        // global url samples -BEGIN-
        if (App::environment(['local', 'testing'])) {
            // global url to string
            Route::get(
                '/grok/TallAndSassy/TeamMeansFamily/sample_string',
                function () {
                    return "Hello TeamMeansFamily string via global url.";
                }
            );

            // global url to blade view
            Route::get(
                '/grok/TallAndSassy/TeamMeansFamily/sample_blade',
                function () {
                    return view('tassy::sample_blade');
                }
            );

            // global url to controller
            Route::get('/grok/TallAndSassy/TeamMeansFamily/controller', [TeamMeansFamilyController::class, 'sample']);
        }
        // global url samples -END-

        // TODO: Add your own global routes here...

        // GROK
        if (App::environment(['local', 'testing'])) {
            \ElegantTechnologies\Grok\GrokWrangler::grokMe(static::class, 'TallAndSassy', 'team-means-family', 'resources/views/grok', 'tassy');//tassy gets macro'd out
            Route::get('/grok/TallAndSassy/TeamMeansFamily', fn () => view('tassy::grok/index'));
        }

        // TODO: Register your livewire components that live in this package here:
        # \Livewire\Livewire::component('tassygroklivewirejet::a-a-nothing',  \TallAndSassy\GrokLivewireJet\Components\DemoUiChunks\AANothing::class);
        // TODO: Add your own other boot related stuff here...

        // TODO: Add your own admin menu items here
        /*
         * ring $handle, string $Label, ?string $SvgHtml, ?string $IconName, ?string $urlIfNoFurtherChildren_nullIfGroup, ?string $IconSizingClasses = null
         * \TallAndSassy\PageGuide\MenuTree::singleton('upper')->pushTop( // 'lower' puts items down low.
                'admin.Cafe', // Key
                'Cafe',         // $Label
                null,//$SvgHtml
                'heroicon-o-question-mark-circle', // $IconNameVisit: https://blade-ui-kit.com/blade-icons/heroicon-o-home
                null, //$urlIfNoFurtherChildren_nullIfGroup
                null //$IconSizingClasses
            )
                ->pushLink('admin.salad.fruit' . uniqid(), 'Fruit Salad', '/admin/fruit')
                ->pushLink('admin.salad.leaf' . uniqid(), 'Lettuce Salad', '/admin/leaf')
                ->pushLink('admin.salad.potato' . uniqid(), 'Yucky Salad', '/admin/potato')
                ->pushGroup('condiments' . uniqid(), 'Condiments')
                ->pushLink(
                    'admin.condiments.mustard' . uniqid(),
                    'Hymans Brand Mustard',
                    '/admin/condiment/mustard'
                );
         */
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/team-means-family.php', 'team-means-family');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
