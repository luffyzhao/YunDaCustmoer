<?php

namespace YunDaCustoms\Info;

class Header
{
    public $buztype = 'clientShip';
    public $version = '1.0';

    public function __toString()
    {
        return "<buztype>{$this->buztype}</buztype>
<version>{$this->version}</version>";
    }
}

/**
 * <head>
 * <buztype>clientShip</buztype>
 * <version>1.0</version>
 * </head>
 */