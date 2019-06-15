<?php

class Robodog implements Animal, Robot, Pet {
    
    private $baterrylevel = 100; 

        public function charge(int $level): void {
        
            $this->baterrylevel = $level;
    }

    public function play(): void {
        echo 'Running' . PHP_EOL;
        $this->baterrylevel -= 10;
    }

    public function speak(): void {
        echo 'Ham' . PHP_EOL;
    }

    public function start(): void {
        echo 'Strting RoboDog' . PHP_EOL;
    }

}
