<?php

namespace app\Handlers;

class ConfigHandler
{
    public function userField()
    {
        $a = auth()->user()->name;
        if ($a == "sholihin"){
          $a = null;
        } else {
          $a = auth()->user()->name;
        }
        // return auth()->user()->name;
        return $a;
    }
}
