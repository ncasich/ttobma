<?php

namespace App\Console\Commands\Dev;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use App\Console\Commands\Base\ProgressBar;


class ApplyDBChanges extends Command
{
    use ProgressBar;

    protected $signature = 'db-changes:apply';

    protected $description = 'Applies development admin password and fakes emails for development needs';

    protected $local = [
        'domain' => 'https://tradetree.loc',
        'environment' => 'local',
        'url' => 'https://tradetree.loc',
        'host' => 'cdb-na',
    ];

    protected $debug = true;

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $local = $this->local;

        if (
            Str::endsWith(env('APP_DOMAIN'), '.loc') &&
            env('APP_ENV') === $local['environment'] &&
            Str::endsWith(env('APP_URL'), '.loc') &&
            env('DB_HOST') === $local['host']
        ) {
            $time = time();
            $users = User::withTrashed()->get();
            $this->initBar($users->count());
            foreach ($users as $user) {
                $this->informBar('Processing user: ' . $user->id . ': ' . $user->full_name . '...');
                do {} while (!$this->update($user));
                $this->advanceBar();
            }
            $this->informBar('FINISHED in: ' . (time() - $time) . ' sec');
            $this->finishBar();
        } else {
            $this->warn('This command makes irreversible db changes. Run in development environment only');
        }
    }

    protected function update(User $user){
        static $idx = [];
        $idx[$user->id] = !isset($idx[$user->id]) ? 0 : ++$idx[$user->id];
        try {
            $prefix = !$idx[$user->id] ? '' : $idx[$user->id];
            return $user->update([
                'email' => substr($user->email, 0, strpos($user->email, "@")) . $prefix . '@tradetree.work',
                'password' => bcrypt('!QAZ2wsx'),
                'remember_token' => Str::random(60),
            ]);
        } catch (\Exception $e) {
//            Log::info($user->email . ' : ' . $e->getMessage());
        }
        return false;
    }
}
