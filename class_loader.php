<?php
$configs = array(
    __DIR__ . '/config/const.php'
);
foreach ($configs as $file) {
    if (file_exists($file)) {
        require_once($file);
    }
}
function nsrPackagePlotClassLoader($class)
{
    $array = explode('\\', $class);
    if (!empty($array[0]) && $array[0] !== 'Nsr') {
        return null;
    }
    if (!empty($array[1]) && $array[1] !== 'NsPackagePlot') {
        return null;
    }
    array_splice($array, 0, 2);

    $classfile = __DIR__ . '/src/' . implode(DIRECTORY_SEPARATOR, $array) . '.php';
    if (!file_exists($classfile)) {
        return null;
    }
    require_once($classfile);
}

spl_autoload_register('nsrPackagePlotClassLoader');
