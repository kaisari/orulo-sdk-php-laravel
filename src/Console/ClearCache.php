<?php

namespace Jetimob\Orulo\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Jetimob\Orulo\Facade\Orulo;
use Jetimob\Orulo\Lib\Http\Auth\AuthType;

class ClearCache extends Command
{
    protected $signature = 'orulo:clear-cache {clientId}';

    protected $description = 'Clears an authorization token from the given clientId';

    public function handle()
    {
        $clientId = $this->argument('clientId');

        if (empty($clientId)) {
            $this->warn('you MUST specify the clientId key that should be cleared');
            return;
        }

        Cache::forget(Orulo::getCacheKey($clientId, AuthType::ORULO_CLIENT_AUTH));
        Cache::forget(Orulo::getCacheKey($clientId, AuthType::ORULO_END_USER_AUTH));

        $this->info(sprintf('Cleared authorization keys for clientId %s', $clientId));
    }
}