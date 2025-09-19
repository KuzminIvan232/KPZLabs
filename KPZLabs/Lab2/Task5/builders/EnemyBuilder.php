<?php
require_once __DIR__ . '/../Character.php';
require_once 'BuilderInterface.php';

class EnemyBuilder implements BuilderInterface
{
    private Character $character;

    public function __construct()
    {
        $this->character = new Character("Enemy");
    }
    public function setHeight(int $height): self
    {
        $this->character->height = $height;
        return $this;
    }
    public function setBuild(string $build): self
    {
        $this->character->build = $build;
        return $this;
    }
    public function setHairColor(string $color): self
    {
        $this->character->hairColor = $color;
        return $this;
    }
    public function setEyeColor(string $color): self
    {
        $this->character->eyeColor = $color;
        return $this;
    }
    public function setClothes(string $clothes): self
    {
        $this->character->clothes = $clothes;
        return $this;
    }
    public function addInventory(string $item): self
    {
        $this->character->inventory[] = $item;
        return $this;
    }
    public function addAction(string $action): self
    {
        $this->character->actions[] = $action;
        return $this;
    }
    public function getCharacter(): Character
    {
        return $this->character;
    }
}
