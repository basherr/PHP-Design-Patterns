<?php


return [
    ['GET', '/', ['App\Controller\CreationalController', 'abstractFactory'] ],
    ['GET', '/builder', ['App\Controller\CreationalController', 'builderFactory']],
    ['GET', '/factory', ['App\Controller\CreationalController', 'factoryMethod']],
    ['GET', '/pool', ['App\Controller\CreationalController', 'pool']],
    ['GET', '/proto', ['App\Controller\CreationalController', 'prototype']],
    ['GET', '/simple', ['App\Controller\CreationalController', 'simpleFactory']],
    ['GET', '/structural', ['App\Controller\StructuralController', 'adapterPattern']],
    // ['GET', '/{slug}', ['App\Controller\CreationalController', 'show']],
];
