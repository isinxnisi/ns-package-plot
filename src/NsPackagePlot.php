<?php

namespace Nsr\NsPackagePlot;

if (!defined('NSPACKPLOT_TITLE')) {
    require __DIR__ . '/../class_loader.php';
}

use Nsr\NsPackagePlot\Common\PackageBase;

class NsPackagePlot extends PackageBase
{
    public static function hello()
    {
        echo "Hello! \n" . parent::say(NSPACKPLOT_TITLE);
    }
}
