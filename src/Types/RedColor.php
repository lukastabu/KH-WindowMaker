<?php

namespace WindowMaker\Types;

class RedColor implements \WindowMaker\Interfaces\ColorInterface
{

    public function color() : string
    {
        return 'This window is colored in red.';
    }
}