<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * View
 *
 * @ORM\Table(name="view", indexes={@ORM\Index(name="fk_VIEW_Controller_idx", columns={"Controller_IDCONTROLLER"})})
 * @ORM\Entity
 */
class View
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IDVIEW", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idview;

    /**
     * @var string
     *
     * @ORM\Column(name="NOME", type="string", length=45, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="LABEL", type="string", length=45, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="ROUTE", type="string", length=45, nullable=false)
     */
    private $route;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \Application\Entity\Controller
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Controller")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Controller_IDCONTROLLER", referencedColumnName="IDCONTROLLER")
     * })
     */
    private $controllercontroller;

    function getIdview() {
        return $this->idview;
    }

    function getNome() {
        return $this->nome;
    }

    function getLabel() {
        return $this->label;
    }

    function getRoute() {
        return $this->route;
    }

    function getStatus() {
        return $this->status;
    }

    function getControllercontroller() {
        return $this->controllercontroller;
    }

    function setIdview($idview) {
        $this->idview = $idview;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setLabel($label) {
        $this->label = $label;
    }

    function setRoute($route) {
        $this->route = $route;
    }

    function setStatus($status) {
        $this->status = $status;
        }

    function setControllercontroller(\Application\Entity\Controller $controllercontroller) {
        $this->controllercontroller = $controllercontroller;
    }


}

