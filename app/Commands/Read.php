<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use App\Memo;

class Read extends Command
{
  /**
  * The signature of the command.
  *
  * @var string
  */
  protected $signature = 'read';

  /**
  * The description of the command.
  *
  * @var string
  */
  protected $description = 'メモ一覧の読み込み';

  /**
  * Execute the console command.
  *
  * @return mixed
  */
  public function handle()
  {
    $option = $this->argument('option');
    echo "メモ一覧 \n";
    foreach (Memo::all()->toArray() as $key => $value) {
      echo $value['created_at'].": ".$value['description']."\n";
    }
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
