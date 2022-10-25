<?php

namespace WindowMaker;

use WindowMaker\Interfaces\WindowFactoryInterface;
use WindowMaker\Types\MasterFitter;

class AluminiumWindowFactory implements WindowFactoryInterface
{

    public function makeWindow(): \WindowMaker\Interfaces\Window
    {
        // TODO: Implement makeWindow() method.
        return new Types\AluminiumWindow();
    }

    public function makeFitter(): \WindowMaker\Interfaces\Fitter
    {
        // TODO: Implement makeFitter() method.
        return new Types\MasterFitter();
    }
}