<?php

namespace WindowMaker\Types;

use WindowMaker\Interfaces\WindowInterface;

class AluminiumWindow implements WindowInterface
{

    public function material(): string
    {
        // TODO: Implement material() method.
        return 'I am aluminium window';
    }
}