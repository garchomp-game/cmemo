<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use \App\Memo;

class Write extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'write {description}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'メモ書き込み';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      Memo::create([
        'description' => $this->argument('description')
      ]);
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
