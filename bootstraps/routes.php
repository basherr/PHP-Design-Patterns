<?php


return [
    ['GET', '/', ['App\Controller\CreationalController', 'abstractFactory'] ],
    ['GET', '/builder', ['App\Controller\CreationalController', 'builderFactory']],
    // ['GET', '/{slug}', ['App\Controller\CreationalController', 'show']],
];