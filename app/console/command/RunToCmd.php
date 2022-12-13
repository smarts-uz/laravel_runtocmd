<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace app\console\command;
use App\Service\CmdService;
use Illuminate\Console\Command;


class RunToCmd extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:runCmd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {

        $service = new CmdService;
        $service->getCmd();
    }
}
