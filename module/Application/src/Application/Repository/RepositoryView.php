<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ControllerRepository
 *
 * @author Marcelo
 */
class RepositoryView extends EntityRepository{
    
    public function listView($parent = 0) {
        $listView = $this->createQueryBuilder('u')
                         ->where("u.viewparent = '$parent'")
                         ->getQuery()
                         ->getResult();
        $i = 0 ;
        if (!empty($listView)) {
            foreach ($listView as $product) {
                $nav[$i] = array(
                    'label' => $product->getLabel() ,
                    'route' => $product->getRoute() ,
                    );
                    if ($product->getViewParent() != 0) {
                        $nav[$i] = $nav[$i] + array('pages' => $this->listView($product->getIdView()));
                    }else{
                        $nav[$i] = $nav[$i] + array('pages' => $this->listView($product->getIdView()));
                    }
                $i++;
            }
            return $nav;
        }

    }
    
}
//$navigation = $serviceLocator()->get('Doctrine\ORM\EntityManager')->getRepository('Application\Entity\EntityView')->listView();
            