<?php

namespace App\Console\Commands\Dev;

use App\Models\User\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CdbTest extends Command
{
    protected $signature = 'cdb:test';

    protected $description = 'Test connection to outer docker cdb container';

    protected $debug = true;

    public function handle()
    {
        $this->testUser();
        dd(DB::table('users')->where('mysql_id', 1)->get());
    }

    protected function testUser()
    {
        $user = User::factory()->create();
        dd($user->id);
    }
}
