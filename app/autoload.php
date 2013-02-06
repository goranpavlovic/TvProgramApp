<?php

use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__.'/../vendor/autoload.php';

$loader->add('WhiteOctober', __DIR__.'/../vendor/bundles');
$loader->add('Pagerfanta', __DIR__.'/../vendor/pagerfanta/src');

$loader->add('FOS', __DIR__.'/../vendor/bundles');
$loader->add('Facebook', __DIR__.'/../vendor/facebook/src');
$loader->add('GoogleApi', __DIR__.'/../vendor/google/src');

// intl
if (!function_exists('intl_get_error_code')) {
    require_once __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs/functions.php';

    $loader->add('', __DIR__.'/../vendor/symfony/symfony/src/Symfony/Component/Locale/Resources/stubs');
}

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
