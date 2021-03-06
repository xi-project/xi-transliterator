<?php

namespace Xi\Transliterator\Tests;

use Xi\Transliterator\Transliterator;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @abstract
     * @return Transliterator
     */
    abstract public function getTransliteratorWithDefaultSettings();

    /**
     * @return array
     */
    public function provideBasicStrings()
    {
        return array(
            array('Ainoo mi toimii on vibraato.', 'Ainoo mi toimii on vibraato.'),
            array('Tohtori Vesala imaisi mehevän tussin', 'Tohtori Vesala imaisi mehevan tussin'),
            array('Vesihiisi sihisi hississä', 'Vesihiisi sihisi hississa'),
            array('Ääliö älä lyö ööliä läikkyy', 'Aalio ala lyo oolia laikkyy'),
            array('ÖÄÅöäå', 'OAAoaa'),
            array('Lo siento, no hablo español.', 'Lo siento, no hablo espanol.'),
            array('J\'étudie le français', 'J\'etudie le francais'),
        );
    }

    /**
     * @dataProvider provideBasicStrings
     * @test
     */
    public function transliteratorShouldCorrectlyTransliterateBasicStrings($untransliterated, $transliterated)
    {
        $transliterator = $this->getTransliteratorWithDefaultSettings();
        $this->assertEquals($transliterated, $transliterator->transliterate($untransliterated));
    }

}
