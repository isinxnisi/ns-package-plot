<?php

namespace Nsr\NsPackagePlot;

use Nsr\NsPackagePlot\Common\PackageBase;

class NsPackagePlot extends PackageBase
{
    public static function hello()
    {
        echo 'Hello! \n';
        parent::say(NSPACKPLOT_TITLE);
    }
}
