<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Description of Order
 *
 * @author med
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="Order")
 */
class Order {
    //put your code here
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
     * @ORM\Column(name="Adress1", type="text")
     */
    private $ADR1;
     /**
     * @var string
     * @ORM\Column(name="Adress2", type="text")
     */
    private $ADR2;
    /**
     * @var string
     * @ORM\Column(name="F_Name", type="text")
     */
    private $F_Name;
     /**
     * @var string
     * @ORM\Column(name="L_Namme", type="text")
     */
    private $L_Name; 
     /**
     * @var string
     * @ORM\Column(name="City", type="text")
     */
    private $City; 
         /**
     * @var string
     * @ORM\Column(name="ZipCode", type="text")
     */
    private $ZipCode; 
         /**
     * @var string
     * @ORM\Column(name="State", type="text")
     */
    private $State; 
         /**
     * @var string
     * @ORM\Column(name="Country", type="text")
     */
    private $Country; 
         /**
     * @var string
     * @ORM\Column(name="PartNumber", type="text")
     */
    private $PartNumber; 
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
     * @return Order
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
     * Set aDR1
     *
     * @param string $aDR1
     *
     * @return Order
     */
    public function setADR1($aDR1)
    {
        $this->ADR1 = $aDR1;

        return $this;
    }

    /**
     * Get aDR1
     *
     * @return string
     */
    public function getADR1()
    {
        return $this->ADR1;
    }

    /**
     * Set aDR2
     *
     * @param string $aDR2
     *
     * @return Order
     */
    public function setADR2($aDR2)
    {
        $this->ADR2 = $aDR2;

        return $this;
    }

    /**
     * Get aDR2
     *
     * @return string
     */
    public function getADR2()
    {
        return $this->ADR2;
    }

    /**
     * Set fName
     *
     * @param string $fName
     *
     * @return Order
     */
    public function setFName($fName)
    {
        $this->F_Name = $fName;

        return $this;
    }

    /**
     * Get fName
     *
     * @return string
     */
    public function getFName()
    {
        return $this->F_Name;
    }

    /**
     * Set lName
     *
     * @param string $lName
     *
     * @return Order
     */
    public function setLName($lName)
    {
        $this->L_Name = $lName;

        return $this;
    }

    /**
     * Get lName
     *
     * @return string
     */
    public function getLName()
    {
        return $this->L_Name;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Order
     */
    public function setCity($city)
    {
        $this->City = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Order
     */
    public function setZipCode($zipCode)
    {
        $this->ZipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Order
     */
    public function setState($state)
    {
        $this->State = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Order
     */
    public function setCountry($country)
    {
        $this->Country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Set partNumber
     *
     * @param string $partNumber
     *
     * @return Order
     */
    public function setPartNumber($partNumber)
    {
        $this->PartNumber = $partNumber;

        return $this;
    }

    /**
     * Get partNumber
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->PartNumber;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Order
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
