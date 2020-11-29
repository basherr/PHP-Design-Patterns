<?php


return [
    ['GET', '/', ['App\Controller\CreationalController', 'abstractTvFactory'] ],
    ['GET', '/meal-builder', ['App\Controller\CreationalController', 'resturantBuilder']],
    ['GET', '/database-builder', ['App\Controller\CreationalController', 'databaseBuilder']],
    ['GET', '/factory', ['App\Controller\CreationalController', 'factoryMethod']],
    ['GET', '/factory2', ['App\Controller\CreationalController', 'factoryMethod2']],
    ['GET', '/pool', ['App\Controller\CreationalController', 'pool']],
    ['GET', '/proto', ['App\Controller\CreationalController', 'prototype']],
    ['GET', '/simple', ['App\Controller\CreationalController', 'simpleFactory']],
    ['GET', '/static', ['App\Controller\CreationalController', 'staticFactory']],
    ['GET', '/structural', ['App\Controller\StructuralController', 'adapterPattern']],
    ['GET', '/structural/adapterExample2', ['App\Controller\StructuralController', 'adapterPatternExample2']],
    ['GET', '/structural/facade', ['App\Controller\StructuralController', 'facade']],
    ['GET', '/structural/bridge', ['App\Controller\StructuralController', 'bridge']],
    ['GET', '/structural/composite', ['App\Controller\StructuralController', 'composite']],
    ['GET', '/structural/decorator', ['App\Controller\StructuralController', 'decorator']],
    ['GET', '/structural/proxy', ['App\Controller\StructuralController', 'proxy']],
    ['GET', '/behavioral', ['App\Controller\BehavioralController', 'chainOfResponsibility']],
    ['GET', '/behavioral/command', ['App\Controller\BehavioralController', 'command']],
    ['GET', '/behavioral/iterator', ['App\Controller\BehavioralController', 'iterator']],
    ['GET', '/behavioral/observer', ['App\Controller\BehavioralController', 'observer']],
    // ['GET', '/{slug}', ['App\Controller\CreationalController', 'show']],
];
