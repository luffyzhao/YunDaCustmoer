<?php
namespace YunDaCustoms;

class Info
{
    /**
     * @var Header
     */
    public $header;

    /**
     * @var Body
     */
    public $body;

    public function __toString()
    {
        return "<info><head>{$this->header}</head>
<body>{$this->body}</body></info>";
    }
}

/**
<info>
<head></head>
<body></body>
</info>
 */