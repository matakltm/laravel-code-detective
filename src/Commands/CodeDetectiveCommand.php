<?php

namespace Matakltm\CodeDetective\Commands;

use Illuminate\Console\Command;

class CodeDetectiveCommand extends Command
{
    public $signature = 'laravel-code-detective';

    public $description = 'Detect and manage code issues with per-file logging.';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
