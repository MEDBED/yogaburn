<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Ip-History
 *
 * @author med
 */
/**
 * @ORM\Entity
 * @ORM\Table(name="IpHistory")
 */
class IpHistory {
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $TimeStamp;

    /**
     * @var string
     * @ORM\Column(name="Status", type="text")
     */
    private $Status;
     /**
     * @var string
     * @ORM\Column(name="Adress2", type="text")
     */
    private $PartdId;
    /**
     * @var string
     * @ORM\Column(name="Data", type="text")
     */
    private $Data; 
    /**
     * @ORM\Column(name="Email", type="string")
     * @var string
     */
    private $Email; 
    

    

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set timeStamp
     *
     * @param \DateTime $timeStamp
     *
     * @return IpHistory
     */
    public function setTimeStamp($timeStamp)
    {
        $this->TimeStamp = $timeStamp;

        return $this;
    }

    /**
     * Get timeStamp
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return IpHistory
     */
    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set partdId
     *
     * @param string $partdId
     *
     * @return IpHistory
     */
    public function setPartdId($partdId)
    {
        $this->PartdId = $partdId;

        return $this;
    }

    /**
     * Get partdId
     *
     * @return string
     */
    public function getPartdId()
    {
        return $this->PartdId;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return IpHistory
     */
    public function setData($data)
    {
        $this->Data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return IpHistory
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }
}
