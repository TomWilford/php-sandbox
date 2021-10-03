<?php

namespace JollyBlueMan\Console\Command;

use JollyBlueMan\Console\UtilityBelt\Session;

class ConsoleCommand extends \Symfony\Component\Console\Command\Command
{
    protected Session $session;

    public function __construct($session){
        $this->session = $session;

        parent::__construct();
    }
}