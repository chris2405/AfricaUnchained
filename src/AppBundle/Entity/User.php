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

    /**
     * @ORM\Column(name="phone", type="phone_number")
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
     * @ORM\Column(name="other", type="string", length=100)
     */
    protected $other;

    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="string", length=100)
     */
    protected $industry;

    /**
     * @var string
     *
     * @ORM\Column(name="achievement", type="integer", length=100)
     */
    protected $achievement;

    /**
     * @var string
     *
     * @ORM\Column(name="publication", type="integer", length=100)
     */
    protected $publication;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=100)
     */
    protected $website;

    /**
     * @var string
     *
     * @ORM\Column(name="linkelind", type="string", length=100)
     */
    protected $linkelind;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=100)
     */
    protected $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100)
     */
    protected $city;

    /**
     * @var string
     *
     * @ORM\Column(name="affiliation", type="string", length=100)
     */
    protected $affiliation;

    public function __construct()
    {
        parent::__construct();
        // your own logic

    }

    /**
     * Set occupation
     *
     * @param string $occupation
     *
     * @return User
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set other
     *
     * @param string $other
     *
     * @return User
     */
    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Get other
     *
     * @return string
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Set industry
     *
     * @param string $industry
     *
     * @return User
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set achievement
     *
     * @param integer $achievement
     *
     * @return User
     */
    public function setAchievement($achievement)
    {
        $this->achievement = $achievement;

        return $this;
    }

    /**
     * Get achievement
     *
     * @return integer
     */
    public function getAchievement()
    {
        return $this->achievement;
    }

    /**
     * Set publication
     *
     * @param integer $publication
     *
     * @return User
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return integer
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return User
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set linkelind
     *
     * @param string $linkelind
     *
     * @return User
     */
    public function setLinkelind($linkelind)
    {
        $this->linkelind = $linkelind;

        return $this;
    }

    /**
     * Get linkelind
     *
     * @return string
     */
    public function getLinkelind()
    {
        return $this->linkelind;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set affiliation
     *
     * @param string $affiliation
     *
     * @return User
     */
    public function setAffiliation($affiliation)
    {
        $this->affiliation = $affiliation;

        return $this;
    }

    /**
     * Get affiliation
     *
     * @return string
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * Set phone
     *
     * @param phone_number $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return phone_number
     */
    public function getPhone()
    {
        return $this->phone;
    }
}
