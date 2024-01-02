<?php

namespace App\Console\Commands\Dev;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class TestRedis extends Command
{
    protected $signature = 'redis:test';

    protected $description = 'Test connection to outer docker redis container';

    protected $debug = true;

    public function handle()
    {
        Cache::store('redis')->forever('ping2', 'pong');
//        dd(Cache::store('redis')->get('ping2'));
    }
}
