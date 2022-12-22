<?php

/**
 *
 *
 * Author:  Samandar Mirkhakimov
 *
 *https://t.me/mirkhakimov1
 * https://github.com/Samandarrrr
 *
 */
namespace RunToCmd\Console\Commands;

use RunToCmd\Services\CmdService;
use Illuminate\Console\Command;


class RunToCmdCommand extends Command
{
    /**
     * The name and signature of the Console Commands.
     *
     * @var string
     */
    protected $signature = 'command:runCmd';

    /**
     * The Console Commands description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the Console Commands.
     *
     * @return void
     */
    public function handle()
    {

        $service = new CmdService;
        $service->getCmd();
    }
}
