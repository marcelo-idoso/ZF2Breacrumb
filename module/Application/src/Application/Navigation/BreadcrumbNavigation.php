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
            $navigation[] = array (
                'label' => 'Home',
                'route' => 'home',
                'pages' => array(
                    array(
                        'label' => 'Album',
                        'route' => 'album',
                        'pages' => array(
                            array(
                                'label' => 'Add',
                                'route' => 'album/add',
                                'action' => 'add',
                            ),
                        ),
                    ),
                    array(
                        'label' => 'Administração',
                        'route' => 'administracao',
                    )
                ),
            );

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
