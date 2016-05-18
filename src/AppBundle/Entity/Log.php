<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Log
 *
 * @author med
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="Log")
 */
class Log {
    
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
     * @ORM\Column(name="message", type="text")
     */
    private $Message;

    /**
     * @var string
     * @ORM\Column(name="ipnid", type="text")
     */
    private $IpnId;    

    

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
     * @return Log
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
     * Set message
     *
     * @param string $message
     *
     * @return Log
     */
    public function setMessage($message)
    {
        $this->Message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * Set ipnId
     *
     * @param string $ipnId
     *
     * @return Log
     */
    public function setIpnId($ipnId)
    {
        $this->IpnId = $ipnId;

        return $this;
    }

    /**
     * Get ipnId
     *
     * @return string
     */
    public function getIpnId()
    {
        return $this->IpnId;
    }
}
