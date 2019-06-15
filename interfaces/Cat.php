<?php

class Cat implements Pet, Animal {
    //put your code here
    public function play(): void {
        echo 'Brakes things' . PHP_EOL;
    }

    public function speak(): void {
        echo 'Miau' . PHP_EOL;
    }

}
