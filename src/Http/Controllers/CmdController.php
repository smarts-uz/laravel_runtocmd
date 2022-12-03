<?php

/**
 * Author:  Mirkhikomov1*/

namespace Teamprodev\Cmd\Http\Controllers;

use App\Http\Controllers\Controller;


namespace App\Services;

class CmdService
{
    public function scanRun()
    {
        $array = scandir(realpath('./.run'));
        foreach ($array as $key => $value) {
            $array[$key] = explode('.', $array[$key])[0];
        }
        return $array;
    }

    public function scanCmd()
    {

        $array = scandir(realpath('./cmd'));
        foreach ($array as $key => $value) {
            $array[$key] = explode('.', $array[$key])[0];
        }
        return $array;
    }

    public function getCmd()
    {
        $run = $this->scanRun();
        $cmd = $this->scanCmd();
        $diff = array_diff($run, $cmd);
        foreach ($diff as $item){
            $file = file_get_contents(realpath('./.run') . '/' . $item . '.run.xml');
            preg_match('#(?<=scriptParameters=")([a-z-_/\.0-9 :.,-=]+(?=">))#', $file, $argument);
            $sample = file_get_contents(realpath('./cmd') . '/list.cmd');
            $final = str_replace("list", $argument[0], $sample);
            file_put_contents(realpath('./cmd') . '/' . $item . '.cmd', $final);
        }
    }
}




