<?php

namespace Jetimob\Orulo\Console;

use Illuminate\Console\Command;

class InstallOruloPackage extends Command
{
    protected $signature = 'orulo:install';

    protected $description = 'Publishes this package configuration files.';

    public function handle()
    {
        $this->info('Installing Orulo package.');
        $this->info('Publishing configuration.');
        $this->call('vendor:publish', [
            '--provider' => 'Jetimob\\Orulo\\OruloServiceProvider',
            '--tag'      => 'config'
        ]);
        $this->info('Package successfully installed.');
    }
}