<?php

class Gardener
{
    private int $appleTreeAmount = 10;
    private int $pearTreeAmount = 15;
    public array $trees = [];
    public array $collectedApples = [];
    public int $amountCollectedApples = 0;
    public int $weightCollectedApples = 0;
    public array $collectedPears = [];
    public int $amountCollectedPears = 0;
    public int $weightCollectedPears = 0;
    public Apple $biggestApple;

    public function __construct()
    {
        for ($_ = 0; $_ < $this->appleTreeAmount; $_++) {
            $this->addTree(new AppleTree());
        }
        for ($_ = 0; $_ < $this->pearTreeAmount; $_++) {
            $this->addTree(new PearTree());
        }
    }

    private function addTree(Tree $tree): void
    {
        $this->trees[] = $tree;
    }

    public function collectFruits(): void
    {
        foreach ($this->trees as $tree) {
            if ($tree instanceof AppleTree) {
                $this->collectHelper($this->collectedApples, $tree);
            } else {
                $this->collectHelper($this->collectedPears, $tree);
            }
        }
    }

    private function collectHelper(&$collectedFruits, $tree): void
    {
        foreach ($tree->fruits as $fruit) {
            $collectedFruits[] = $fruit;
            if ($fruit instanceof Apple) {
                $this->countAmountFruits($this->amountCollectedApples);
                $this->countWeightFruits($this->weightCollectedApples, $fruit->weight);
                $this->maxAppleWeight($fruit);
            } else {
                $this->countAmountFruits($this->amountCollectedPears);
                $this->countWeightFruits($this->weightCollectedPears, $fruit->weight);
            }
        }
    }

    private function countAmountFruits(&$totalAmount): void
    {
        $totalAmount++;
    }

    private function countWeightFruits(&$totalWeight, $weight): void
    {
        $totalWeight += $weight;
    }

    private function maxAppleWeight($fruit): void
    {
        if (!isset($this->biggestApple)) {
            $this->biggestApple = $fruit;
        }
        if ($fruit->weight > $this->biggestApple->weight) {
            $this->biggestApple = $fruit;
        }
    }

    public function outputData(): void
    {
        $result = 'Всего яблок: ' . $this->amountCollectedApples . ' шт.' . PHP_EOL;
        $result .= 'Всего груш: ' . $this->amountCollectedPears . ' шт.' . PHP_EOL;
        $result .= 'Вес всех яблок: ' . $this->weightCollectedApples . ' гр.' . PHP_EOL;
        $result .= 'Вес всех груш: ' . $this->weightCollectedPears . ' гр.' . PHP_EOL;
        $result .= 'Максимальный вес яблока: ' . $this->biggestApple->weight . ' гр.' . PHP_EOL;
        $result .= 'ID дерева, с которого оно было собрано ' . $this->biggestApple->treeId;

        echo $result;
    }
}