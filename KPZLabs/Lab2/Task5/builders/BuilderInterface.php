<?php

interface BuilderInterface
{
    public function setHeight(int $height): self;
    public function setBuild(string $build): self;
    public function setHairColor(string $color): self;
    public function setEyeColor(string $color): self;
    public function setClothes(string $clothes): self;
    public function addInventory(string $item): self;
    public function addAction(string $action): self;
    public function getCharacter(): Character;
}
