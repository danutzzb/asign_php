<?php

class PetOwner {
    private $pets = []; 
    public function buyPet(Pet $pet){
        $this->pets[] = $pet;
    }
    public function PlayWithPets() {
        foreach ($this->pets as $pet){
            $pet->play();
        }
    }
}
