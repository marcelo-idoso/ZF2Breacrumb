<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntityController
 *
 * @ORM\Table(name="controller", indexes={@ORM\Index(name="fk_Controller_Module1_idx", columns={"Module_idModule"})})
 * @ORM\Entity
 */
class EntityController
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
     * @var \Application\EntityModule
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\EntityModule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Module_idModule", referencedColumnName="idModule")
     * })
     */
    private $modulemodule;

    function getIdcontroller() {
        return $this->idcontroller;
    }

    function getNome() {
        return $this->nome;
    }

    function getModulemodule() {
        return $this->modulemodule;
    }

    function setIdcontroller($idcontroller) {
        $this->idcontroller = $idcontroller;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setModulemodule(\Application\Entity\EntityModule $modulemodule) {
        $this->modulemodule = $modulemodule;
    }


}

