<?php

namespace LaravelFrontendPresets\MaterializePreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class MaterializePresetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PresetCommand::macro('materialize', function ($command) {
            MaterializePreset::install();
            $command->info('Materialize scaffolding installed successfully.');
            $command->info('Please run "yarn && yarn dev" to compile your fresh scaffolding.');
        });

        PresetCommand::macro('materialize-auth', function ($command) {
            MaterializePreset::installAuth();
            $command->info('Materialize scaffolding with auth views installed successfully.');
            $command->info('Please run "yarn && yarn dev" to compile your fresh scaffolding.');
        });
    }
}