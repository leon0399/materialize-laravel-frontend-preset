<?php

namespace LaravelFrontendPresets\MaterializePreset;

use Illuminate\Support\Arr;
use Illuminate\Foundation\Console\Presets\Preset;

class MaterializePreset extends Preset {
    public static function install() {
        static::updatePackages();
        static::updateStyles();
        static::updateBootstrapping();
        static::updateWelcomePage();
        static::removeNodeModules();
    }
    public static function installAuth() {
        static::install();
        static::scaffoldAuth();
    }

    protected static function updatePackageArray(array $packages) {
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

    protected static function updateStyles() {

    }

    protected static function updateBootstrapping() {

    }

    protected static function updateWelcomePage() {

    }

    protected static function scaffoldAuth() {

    }

    protected static function compileControllerStub() {
        
    }
}