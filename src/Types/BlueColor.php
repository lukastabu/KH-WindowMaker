<?php

namespace WindowMaker\Types;

class BlueColor implements \WindowMaker\Interfaces\ColorInterface
{

    public function color() : string
    {
        return 'This window is colored in blue.';
    }
}