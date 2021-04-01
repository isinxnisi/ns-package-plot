<?php

namespace Nsr\NsPackagePlot;

require_once __DIR__ . '/../config/const.php';
require_once __DIR__ . '/Common/PackageBase.php';

use Nsr\NsPackagePlot\Common\PackageBase;

class NsPackagePlot extends PackageBase
{
    public static function hello()
    {
        return "Hello! \n" . parent::say(NSPACKPLOT_TITLE);
    }
}
