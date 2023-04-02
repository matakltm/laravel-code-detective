<?php

namespace Matakltm\CodeDetective\Commands;

use Illuminate\Console\Command;

class CodeDetectiveCommand extends Command
{
    public $signature = 'issues';

    public $description = 'Detect and manage code issues with per-file logging.';

    public function handle(): void
    {
        $this->comment('All done');
    }
}
