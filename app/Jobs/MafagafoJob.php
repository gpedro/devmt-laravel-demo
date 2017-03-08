<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Log;

class MafagafoJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    protected $kills;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $kills = 0)
    {
        $this->user = $user;
        $this->kills = $kills;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info('Mafagafo ' . $this->user . ' killed ' . $this->kills . ' peoples');
    }
}
