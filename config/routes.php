<?php

return array(
    
    'skins' => 'skins/index', // actionIndex в SkinsController
    'cars' => 'cars/index', // actionIndex в CarsController
    'house' => 'cars/index', // actionIndex в CarsController
    'profile' => 'profile/index', // actionIndex в ProfileController

    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
    'cart/buy/([0-9]+)' => 'cart/buy/$1', // actionBuy в CartController
    'cart' => 'cart/index', // actionIndex в CartController

    'user/login' => 'user/login', // actionLogin в UserController
    'user/logout' => 'user/logout', // actionLogout в UserControlle

    
    '\w+' => 'error/index', // actionIndex в ErrorController  
    '' => 'skins/index', // actionIndex в SiteController
);?>