<?php

namespace Acl;


class Initializer
{

    const DEFAULT_LOCALE = 'en_US';

    public static function siema($locale = self::DEFAULT_LOCALE){
        echo $locale;
    }

}