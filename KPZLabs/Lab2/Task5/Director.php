<?php

class Director
{
    public function buildHero(BuilderInterface $builder): Character
    {
        return $builder
            ->setHeight(180)
            ->setBuild("Athletic")
            ->setHairColor("Blond")
            ->setEyeColor("Blue")
            ->setClothes("Armor")
            ->addInventory("Sword")
            ->addInventory("Shield")
            ->addAction("Save villagers")
            ->addAction("Protect kingdom")
            ->getCharacter();
    }

    public function buildEnemy(BuilderInterface $builder): Character
    {
        return $builder
            ->setHeight(190)
            ->setBuild("Muscular")
            ->setHairColor("Black")
            ->setEyeColor("Red")
            ->setClothes("Dark Robe")
            ->addInventory("Axe")
            ->addInventory("Poison")
            ->addAction("Steal treasures")
            ->addAction("Destroy villages")
            ->getCharacter();
    }
}
