<?php

namespace Neutron\I18n;


interface LoaderInterface
{
    /**
     * @param $locale
     * @param $textDomain
     *
     * @return TextDomainInterface
     */
    public function load($locale, $textDomain);
}