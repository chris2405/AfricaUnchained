<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic

    }

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=10)
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="occupation", type="string", length=60)
     */
    protected $occupation;

    /**
     * @var string
     *
     * @ORM\Column(name="autre", type="string", length=100)
     */
    protected $Autre;

    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="string", length=100)
     */
    protected $Industry;

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * @param string $occupation
     */
    public function setOccupation(string $occupation)
    {
        $this->occupation = $occupation;
    }

    /**
     * @return string
     */
    public function getAutre()
    {
        return $this->Autre;
    }

    /**
     * @param string $Autre
     */
    public function setAutre(string $Autre)
    {
        $this->Autre = $Autre;
    }

    /**
     * @return string
     */
    public function getIndustry()
    {
        return $this->Industry;
    }

    /**
     * @param string $Industry
     */
    public function setIndustry(string $Industry)
    {
        $this->Industry = $Industry;
    }



}

