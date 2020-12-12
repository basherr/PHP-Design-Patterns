<?php


return [
    // creational routes
    ['GET', '/', ['App\Controller\CreationalController', 'abstractTvFactory'] ],
    ['GET', '/meal-builder', ['App\Controller\CreationalController', 'resturantBuilder']],
    ['GET', '/database-builder', ['App\Controller\CreationalController', 'databaseBuilder']],
    ['GET', '/car-manufacturer-factory-method', ['App\Controller\CreationalController', 'carManufactureFactoryMethod']],
    ['GET', '/logger-factory-method', ['App\Controller\CreationalController', 'loggerFactoryMethod']],
    ['GET', '/pool-reverse-string', ['App\Controller\CreationalController', 'reverseString']],
    ['GET', '/prototype-acme', ['App\Controller\CreationalController', 'acmePrototype']],
    ['GET', '/static', ['App\Controller\CreationalController', 'staticFactory']],
    // structural routes
    ['GET', '/human-adapter', ['App\Controller\StructuralController', 'humanAdapter']],
    ['GET', '/os-adapter', ['App\Controller\StructuralController', 'osAdapter']],
    ['GET', '/facade-quickbooks', ['App\Controller\StructuralController', 'facadeQuickbooks']],
    ['GET', '/bridge-flights', ['App\Controller\StructuralController', 'bridgeFlights']],
    ['GET', '/composite-form', ['App\Controller\StructuralController', 'compositeForm']],
    ['GET', '/decorator-active-record', ['App\Controller\StructuralController', 'decoratorActiveRecord']],
    ['GET', '/proxy-file-reader', ['App\Controller\StructuralController', 'proxyFileReader']],
    ['GET', '/behavioral', ['App\Controller\BehavioralController', 'chainOfResponsibility']],
    ['GET', '/behavioral/command', ['App\Controller\BehavioralController', 'command']],
    ['GET', '/behavioral/iterator', ['App\Controller\BehavioralController', 'iterator']],
    ['GET', '/behavioral/observer', ['App\Controller\BehavioralController', 'observer']],
    // ['GET', '/{slug}', ['App\Controller\CreationalController', 'show']],
];
