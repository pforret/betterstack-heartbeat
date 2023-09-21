<?php

namespace Pforret\BetterstackHeartbeat\Commands;

use Illuminate\Console\Command;

class BetterstackHeartbeatCommand extends Command
{
    public $signature = 'betterstack-heartbeat';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
