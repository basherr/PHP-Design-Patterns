<?php


return [
    ['GET', '/', ['App\Controller\CreationalController', 'abstractFactory'] ],
    ['GET', '/builder', ['App\Controller\CreationalController', 'builderFactory']],
    ['GET', '/factory', ['App\Controller\CreationalController', 'factoryMethod']],
    ['GET', '/pool', ['App\Controller\CreationalController', 'pool']],
    // ['GET', '/{slug}', ['App\Controller\CreationalController', 'show']],
];