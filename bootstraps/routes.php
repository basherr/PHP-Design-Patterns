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
    // behavioral routes
    ['GET', '/chain-http', ['App\Controller\BehavioralController', 'chainHttpRequests']],
    ['GET', '/command-api-scrapper', ['App\Controller\BehavioralController', 'commandApiScrapper']],
    ['GET', '/hotel-supplier-iterators', ['App\Controller\BehavioralController', 'hotelSupplierIterator']],
    ['GET', '/signup-observers', ['App\Controller\BehavioralController', 'signupObservers']],
    // ['GET', '/{slug}', ['App\Controller\CreationalController', 'show']],
];
