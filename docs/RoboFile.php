<?php

class RoboFile extends \Robo\Tasks
{
    public function watch()
    {
        $this->taskWatch()
            ->monitor(
                ['../src', '../tests'],
                function () {
                    $this->taskPHPUnit('../bin/phpunit')
                        ->configFile('../phpunit_unit.xml')
                        ->run();
                }
            )->run();
    }
}