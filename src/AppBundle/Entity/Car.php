<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CarRepository")
 */
class Car
{

    /**
     * @ORM\Column(type="string",length=100)
     */
    private $ownerFN;
    /**
     * @ORM\Column(type="string",length=100)
     */
    private $ownerLN;

    /**
     * @return mixed
     */
    public function getOwnerFN()
    {
        return $this->ownerFN;
    }

    /**
     * @param mixed $ownerFN
     */
    public function setOwnerFN($ownerFN)
    {
        $this->ownerFN = $ownerFN;
    }

    /**
     * @return mixed
     */
    public function getOwnerLN()
    {
        return $this->ownerLN;
    }

    /**
     * @param mixed $ownerLN
     */
    public function setOwnerLN($ownerLN)
    {
        $this->ownerLN = $ownerLN;
    }


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="license", type="string", length=255, unique=true)
     */
    private $license;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255)
     */
    private $year;

    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean")
     */
    private $state;

    /**
     * @ORM\Column(type="string",length=10)
     */

    private $cin;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set license
     *
     * @param string $license
     *
     * @return Car
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
    }


    /**
     * Get license
     *
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Car
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set state
     *
     * @param boolean $state
     *
     * @return Car
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return bool
     */
    public function getState()
    {
        return $this->state;
    }
}

