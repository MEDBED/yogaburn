<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of VervantePart
 *
 * @author med
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="VervantePart")
 */
class VervantePart {
    //put your code here
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     */
    private $PartNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripton", type="Text")
     */
    private $Descripton;


    /**
     * Set partNumber
     *
     * @param integer $partNumber
     *
     * @return VervantePart
     */
    public function setPartNumber($partNumber)
    {
        $this->PartNumber = $partNumber;

        return $this;
    }

    /**
     * Get partNumber
     *
     * @return integer
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }

    /**
     * Set descripton
     *
     * @param \Text $descripton
     *
     * @return VervantePart
     */
    public function setDescripton(\Text $descripton)
    {
        $this->Descripton = $descripton;

        return $this;
    }

    /**
     * Get descripton
     *
     * @return \Text
     */
    public function getDescripton()
    {
        return $this->Descripton;
    }
}
