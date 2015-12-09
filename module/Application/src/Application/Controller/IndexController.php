<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $objectManager = $this->getServiceLocator()
                              ->get('Doctrine\ORM\EntityManager');

        $productRepository = $objectManager->getRepository('Application\Entity\Controller');
        $user = $productRepository->findAll();
        
        foreach ($user as $product) {
            if($product->getDefault() == 'S'){
                $nav[] = array(
                    'label' => $product->getLabel(),
                    'route' => $product->getRoute(),
                    'pages' => array($pages),
                );
            }
          
        }
        echo "<pre>";
        var_dump($nav);
        echo "</pre>";
        die; // yes, I'm lazy
        return new ViewModel();
    }
    
    
    public function albumAction()
    {
        return new ViewModel();
    }
    
    public function addAction()
    {
        return new ViewModel();
    }
    
    public function administracaoAction()
    {
        return new ViewModel();
    }
}
