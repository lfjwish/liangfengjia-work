<?php

namespace MyGreeter;

/**
* 
*/
class Client
{
    public function __construct(){}

    public function getGreeting()
    {
        return $this->timeMsg();
    }

    private function timeMsg()
    {
        $h = date('H', time());
        if ($h >= 0 && $h < 12) { $msg = "Good morning";}
        if ($h >= 12 && $h < 18) { $msg = "Good afternoon";}
        if ($h >= 18 && $h <= 23) { $msg = "Good evening";}
	return $msg;
    }
}

