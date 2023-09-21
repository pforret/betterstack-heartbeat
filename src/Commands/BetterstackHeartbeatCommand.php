<?php

namespace Pforret\BetterstackHeartbeat\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class BetterstackHeartbeatCommand extends Command
{
    public $signature = 'ping:betterstack';

    public $description = 'Send ping to BetterStack heartbeat';

    public function handle(): int
    {
        $url = env('BETTERSTACK_HEARTBEAT', '');
        if ($url) {
            $this->info("Sending ping to BetterStack: $url");
            Http::get($url);
        } else {
            $this->warn('1. create BetterStack Heartbeat URL on https://uptime.betterstack.com/');
            $this->warn('2. add `BETTERSTACK_HEARTBEAT=<url>` to your .env!');
            $this->warn('3. add `$schedule->command(\'ping:betterstack\')->hourly();` to Kernel.php');

            return self::FAILURE;
        }

        return self::SUCCESS;
    }
}
