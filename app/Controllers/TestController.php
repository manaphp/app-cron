<?php
namespace App\Controllers;

use ManaPHP\Cli\Controller;

class TestController extends Controller
{
    /**
     * @CliCommand demo for cli write
     *
     * @param string $name your name
     */
    public function defaultCommand($name = 'manaphp')
    {
        $this->console->debug(['hello :1!', $name]);
        $this->console->debug(['hello :name!', 'name' => $name]);
        $this->logger->debug('abcd');
    }
}