<?php

namespace App\Console\Commands\Dev;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CdbTest extends Command
{
    protected $signature = 'cdb:test';

    protected $description = 'Test connection to outer docker cdb container';

    protected $debug = true;

    public function handle()
    {
        dd(DB::table('users')->where('mysql_id', 1)->get());
    }
}
