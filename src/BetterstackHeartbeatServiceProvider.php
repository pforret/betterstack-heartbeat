<?php

namespace Pforret\BetterstackHeartbeat;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pforret\BetterstackHeartbeat\Commands\BetterstackHeartbeatCommand;

class BetterstackHeartbeatServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('betterstack-heartbeat')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_betterstack-heartbeat_table')
            ->hasCommand(BetterstackHeartbeatCommand::class);
    }
}
