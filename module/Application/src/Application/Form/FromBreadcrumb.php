<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Form;
use Zend\Form\Form;
use Application\Form\FromBreadcrumbFilter;
use Zend\Form\Element\Text;
/**
 * Description of FromBreadcrumb
 *
 * @author Marcelo
 */
class FromBreadcrumb extends Form{
    public function __construct() {
        parent::__construct();
        $this->setAttribute('method', 'POST');
        
        
        $nome = new Text('nome');
        
        $this->add($nome)      
        ;
    }
}
