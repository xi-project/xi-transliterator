<?php

namespace Xi\Transliterator\Tests;

use Xi\Transliterator\IntlTransliterator;

class IntlTransliteratorTest extends TestCase
{

    public function setUp()
    {
        if (!class_exists("Transliterator")) {
            $this->markTestSkipped("Transliterator class (from intl extension 2.0+) not found");
        }
    }

    public function getTransliteratorWithDefaultSettings()
    {
        return new IntlTransliterator();
    }

    /**
     * @test
     */
    public function interfaceShouldExist()
    {
        $this->assertTrue(class_exists('Xi\Transliterator\IntlTransliterator'));
        $this->assertContains('Xi\Transliterator\Transliterator', class_implements('Xi\Transliterator\IntlTransliterator'));
    }
}
