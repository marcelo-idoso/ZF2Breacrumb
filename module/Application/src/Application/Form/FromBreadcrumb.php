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
        
        $Controller = new Text('Controller');
        $Controller->setLabel("Controller: ");
        $Controller->setAttributes(array(
            "class" => 'form-control',
        ));
        $this->add($Controller);
        
        $nome = new Text('nome');
        $nome->setLabel("Nome: ");
        $nome->setAttributes(array(
            "class" => 'form-control',
        ));
        $this->add($nome);
        
        $label = new Text('label');
        $label->setLabel("Label: ");
        $label->setAttributes(array(
            "class" => 'form-control',
        ));
        $this->add($label)  ;
        
        $route = new Text('route');
        $route->setLabel("Route: ");
        $route->setAttributes(array(
            "class" => 'form-control',
        ));
        $this->add($route)  ;
        
        $select = new \Zend\Form\Element\Select('parentView');
        $select->setLabel('Parente View');
        $select->setAttributes(array(
            "class" => 'form-control',
        ));
        $select->setValueOptions(array(
             '0' => 'French',
             '1' => 'English',
             '2' => 'Japanese',
             '3' => 'Chinese',
        ));
        $this->add($select);
        
        $status = new \Zend\Form\Element\Select('Status');
        $status->setLabel('Status');
        $status->setAttributes(array(
            "class" => 'form-control',
        ));
        $status->setValueOptions(array(
             '0' => '',
             '1' => 'Ativo',
             '2' => 'Inativo',
        ));
        $this->add($status);
        
        $submit = new \Zend\Form\Element\Submit('Salvar');
        $submit->setValue('Salvar')
               ->setAttributes(array(
                    "class" => 'btn btn-primary btn-lg btn-block',
                ));
        $this->add($submit);

    }
}
