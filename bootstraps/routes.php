<?php


return [
    ['GET', '/', ['App\Controller\CreationalController', 'abstractFactory'] ],
    ['GET', '/another-route', function () {
        echo 'This works too';
    }],
    ['GET', '/{slug}', ['App\Controller\CreationalController', 'show']],
];