<?php

namespace WindowMaker\Types;

use WindowMaker\Interfaces\FitterInterface;

class MasterFitter implements FitterInterface
{

    public function fit(): string
    {
        return 'I fit aluminium window.';
    }
}