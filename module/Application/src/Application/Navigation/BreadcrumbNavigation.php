<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Navigation;


use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Navigation\Service\DefaultNavigationFactory;

/**
 * Description of BlogNavigation
 *
 * @author Marcelo
 */
class BreadcrumbNavigation extends DefaultNavigationFactory{

    protected function getPages(ServiceLocatorInterface $serviceLocator)
    {
        $navigation = array();

        if (null === $this->pages) {
            $navigation = $serviceLocator->get('Doctrine\ORM\EntityManager')
                                           ->getRepository('Application\Entity\EntityView')
                                           ->listView();
            echo "<pre>";
                print_r($navigation); // para visualizar como está o array
            echo "</pre>";
            $mvcEvent = $serviceLocator->get('Application')
                                       ->getMvcEvent();

            $routeMatch = $mvcEvent->getRouteMatch();
            $router     = $mvcEvent->getRouter();
            $pages      = $this->getPagesFromConfig($navigation);
            
            $this->pages = $this->injectComponents(
                                $pages,
                                $routeMatch,
                                $router
                            );
        }
        return $this->pages;
    }
}
