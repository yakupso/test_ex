<?php

use PHPUnit\Framework\TestCase;

class GardenerTest extends TestCase
{
    public function testCollectFruits()
    {
        $gardener = new Gardener();
        $gardener->collectFruits();

        $this->assertCount(25, $gardener->trees);

        $this->assertGreaterThanOrEqual(400, count($gardener->collectedApples));
        $this->assertLessThanOrEqual(500, count($gardener->collectedApples));

        $this->assertGreaterThanOrEqual(400, $gardener->amountCollectedApples);
        $this->assertLessThanOrEqual(500, $gardener->amountCollectedApples);

        $this->assertGreaterThanOrEqual(60000, $gardener->weightCollectedApples);
        $this->assertLessThanOrEqual(90000, $gardener->weightCollectedApples);

        $this->assertGreaterThanOrEqual(0, count($gardener->collectedPears));
        $this->assertLessThanOrEqual(300, count($gardener->collectedPears));

        $this->assertGreaterThanOrEqual(0, $gardener->amountCollectedPears);
        $this->assertLessThanOrEqual(300, $gardener->amountCollectedPears);

        $this->assertGreaterThanOrEqual(0, $gardener->weightCollectedPears);
        $this->assertLessThanOrEqual(51000, $gardener->weightCollectedPears);

        $this->assertInstanceOf(Apple::class, $gardener->biggestApple);
    }

    public function testPrintData()
    {
        $gardener = new Gardener();
        $gardener->collectFruits();

        $regex = '/^Всего\sяблок:\s\d{3}\sшт\.' . PHP_EOL;
        $regex .= 'Всего\sгруш:\s\d{1,3}\sшт\.' . PHP_EOL;
        $regex .= 'Вес\sвсех\sяблок:\s[6-9]\d{4}\sгр\.' . PHP_EOL;
        $regex .= 'Вес\sвсех\sгруш:\s\d{1,5}\sгр\.' . PHP_EOL;
        $regex .= 'Максимальный\sвес\sяблока:\s1\d{2}\sгр\.' . PHP_EOL;
        $regex .= 'ID\sдерева,\sс\sкоторого\sоно\sбыло\sсобрано\s\d{1,2}$/';

        //$this->assertMatchesRegularExpression($regex, $gardener->outputData());
        $this->expectOutputRegex($regex);
        $gardener->outputData();
    }
}