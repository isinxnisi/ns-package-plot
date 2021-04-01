<?php

namespace Nsr\NsPackagePlot;

use Nsr\NsPackagePlot\Common\PackageBase;

class NsPackagePlot extends PackageBase
{
    public static function hello()
    {
        return "Hello! \n" . parent::say(NSPACKPLOT_TITLE);
    }
}
