<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
/**
 * Description of BreadcrumbController
 *
 * @author Marcelo
 */
class BreadcrumbController  extends AbstractActionController {
    
    public function breadcrumbAction() {
        
       $listAll= $this->getServiceLocator()
                      ->get('Doctrine\ORM\EntityManager')
                      ->getRepository('Application\Entity\EntityView')->AllView();
       
        return new ViewModel(array(
            'data'      => $listAll,
        ));
    }
    
    public function addbreadcrumbAction() {
        return new ViewModel();
    }
}

