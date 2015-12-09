<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Controller
 *
 * @ORM\Table(name="controller")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Application\Repository\ControllerRepository")
 */
class Controller
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDCONTROLLER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontroller;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME", type="string", length=45, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="ROUTE", type="string", length=45, nullable=false)
     */
    private $route;

    /**
     * @var string
     *
     * @ORM\Column(name="LABEL", type="string", length=45, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="DEFAULT", type="string", length=1, nullable=false)
     */
    private $default = 'N';

    function getIdcontroller() {
        return $this->idcontroller;
    }

    function getNome() {
        return $this->nome;
    }

    function getRoute() {
        return $this->route;
    }

    function getLabel() {
        return $this->label;
    }

    function getDefault() {
        return $this->default;
    }

    function setIdcontroller($idcontroller) {
        $this->idcontroller = $idcontroller;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setRoute($route) {
        $this->route = $route;
    }

    function setLabel($label) {
        $this->label = $label;
    }

    function setDefault($default) {
        $this->default = $default;
    }


}

