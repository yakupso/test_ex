<?php

class Apple extends Fruit
{
    public function __construct($treeId)
    {
        $minWeight = 150;
        $maxWeight = 180;
        $this->setWeight($minWeight, $maxWeight);
        $this->treeId = $treeId;
    }
}