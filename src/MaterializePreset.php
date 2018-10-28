<?php

namespace LaravelFrontendPresets\MaterializePreset;

use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;
use Illuminate\Support\Arr;

class MaterializePreset extends Preset
{

    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::updateStyles();
        static::updateBootstrapping();
        static::updateWelcomePage();
        static::removeNodeModules();
    }

    /**
     * Install the preset with Authentication.
     *
     * @return void
     */
    public static function installAuth()
    {
        static::install();
        static::scaffoldAuth();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return array_merge([
            'laravel-mix' => '^2.1',
            'laravel-mix-purgecss' => '^2.2',
            'materialize-css"' => '^1.0.0-rc.2',
        ], Arr::except($packages, [
            'bootstrap',
            'bootstrap-sass',
            'laravel-mix',
            'jquery',
        ]));
    }

    protected static function updateStyles()
    {
        tap(new Filesystem, function (Filesystem $filesystem) {
            $filesystem->deleteDirectory(resource_path('sass'));
            $filesystem->delete(public_path('js/app.js'));
            $filesystem->delete(public_path('css/app.css'));

            if (!$filesystem->isDirectory($directory = resource_path('sass'))) {
                $filesystem->makeDirectory($directory, 0755, true);
            }
        });

        copy(__DIR__ . '/materialize-stubs/resources/sass/_variables.scss', resource_path('sass/_variables.scss'));
        copy(__DIR__ . '/materialize-stubs/resources/sass/app.scss', resource_path('sass/app.scss'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/materialize-stubs/resources/js/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    protected static function updateWelcomePage()
    {
        (new Filesystem)->delete(resource_path('views/welcome.blade.php'));
    }

    protected static function scaffoldAuth()
    {
        file_put_contents(app_path('Http/Controllers/HomeController.php'), static::compileControllerStub());

        file_put_contents(
            base_path('routes/web.php'),
            "Auth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n\n",
            FILE_APPEND
        );

        (new Filesystem)->copyDirectory(__DIR__.'/materialize-stubs/resources/views', resource_path('views'));
    }

    protected static function compileControllerStub()
    {
        return str_replace(
            '{{namespace}}',
            Container::getInstance()->getNamespace(),
            file_get_contents(__DIR__ . '/materialize-stubs/controllers/HomeController.stub')
        );
    }
}