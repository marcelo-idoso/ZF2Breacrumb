<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityView
 *
 * @ORM\Table(name="view", indexes={@ORM\Index(name="fk_VIEW_Controller_idx", columns={"Controller_IDCONTROLLER"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Application\Repository\RepositoryView")
 * 
 */
class EntityView
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
     * @var integer
     *
     * @ORM\Column(name="VIEWPARENT", type="integer", nullable=false)
     */
    private $viewparent = '0';

    /**
     * @var \Application\EntityController
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityController")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Controller_IDCONTROLLER", referencedColumnName="IDCONTROLLER")
     * })
     */
    private $controllercontroller;

    public function getIdview() {
        return $this->idview;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getLabel() {
        return $this->label;
    }

    public function getRoute() {
        return $this->route;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getViewparent() {
        return $this->viewparent;
    }

    public function getControllercontroller() {
        return $this->controllercontroller;
    }

    public function setIdview($idview) {
        $this->idview = $idview;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    public function setRoute($route) {
        $this->route = $route;
        return $this;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function setViewparent($viewparent) {
        $this->viewparent = $viewparent;
        return $this;
    }

    public function setControllercontroller(\Application\Entity\EntityModule $controllercontroller) {
        $this->controllercontroller = $controllercontroller;
        return $this;
    }


}

