<?php

namespace Xi\Transliterator\Tests;

use Xi\Transliterator\PeclTranslitTransliterator;

class PeclTranslitTransliteratorTest extends TestCase
{

    public function setUp()
    {
        if (!extension_loaded("translit")) {
            $this->markTestSkipped("PECL translit extension not loaded");
        }

    }

    public function getTransliteratorWithDefaultSettings()
    {
        return new PeclTranslitTransliterator();
    }

    /**
     * @test
     */
    public function interfaceShouldExist()
    {
        $this->assertTrue(class_exists('Xi\Transliterator\PeclTranslitTransliterator'));
        $this->assertContains('Xi\Transliterator\Transliterator', class_implements('Xi\Transliterator\PeclTranslitTransliterator'));
    }
}
