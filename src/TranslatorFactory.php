<?php

namespace Phpfox\I18n;


/**
 * Class TranslatorFactory
 *
 * @package Phpfox\I18n
 */
class TranslatorFactory
{
    /**
     * @return Translator
     */
    public function factory()
    {
        return new Translator();
    }

    /**
     * @return bool
     */
    public function shouldCache()
    {
        return false;
    }
}