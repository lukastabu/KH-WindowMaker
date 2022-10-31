<?php

namespace WindowMaker;

use WindowMaker\Interfaces\WindowFactoryInterface;
use WindowMaker\Types\ExpertFitter;
use WindowMaker\Types\PlasticWindow;

class PlasticWindowFactory implements WindowFactoryInterface
{
    public function makeWindow(): \WindowMaker\Interfaces\Window
    {
        // TODO: Implement makeWindow() method.
        return new PlasticWindow();
    }

    public function makeFitter(): \WindowMaker\Interfaces\Fitter
    {
        // TODO: Implement makeFitter() method.
        return new ExpertFitter();
    }
}