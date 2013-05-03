<?php

namespace Xi\Transliterator\Tests;

use Xi\Transliterator\StupidTransliterator;

class StupidTransliteratorTest extends TestCase
{

    public function getTransliteratorWithDefaultSettings()
    {
        return new StupidTransliterator();
    }

    /**
     * @test
     */
    public function interfaceShouldExist()
    {
        $this->assertTrue(class_exists('Xi\Transliterator\StupidTransliterator'));
        $this->assertContains('Xi\Transliterator\Transliterator', class_implements('Xi\Transliterator\StupidTransliterator'));
    }
}
