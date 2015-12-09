<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Navigation;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class BreadcrumbNavigationFactory implements FactoryInterface{
   
    public function createService(ServiceLocatorInterface $serviceLocator) {
        $navigation = new BreadcrumbNavigation();
        return $navigation->createService($serviceLocator);
    }
    
    

}
