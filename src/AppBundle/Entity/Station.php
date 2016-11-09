<?php
/**
 * Created by PhpStorm.
 * User: nobuyukifujioka
 * Date: 08/11/2016
 * Time: 10:07
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="station")
 */
class Station
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="decimal")
     */
    private $latitude;

    /**
     * @ORM\Column(type="decimal")
     */
    private $longitude;

    /**
     * @ORM\Column(type="string")
     */
    private $postcode;

    /**
     * @ORM\Column(type="string")
     */
    private $location;

    /**
     * @ORM\Column(type="integer")
     */
    private $locationId;

    /**
     * @ORM\Column(type="integer")
     */
    private $pumpId;

    /**
     * @ORM\Column(type="string")
     */
    private $pumpModel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $available;

    /**
     * @ORM\Column(type="boolean")
     */
    private $swipeOnly;

    /**
     * @ORM\Column(type="decimal")
     */
    private $distance;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * @param mixed $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * @param mixed $locationId
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * @return mixed
     */
    public function getPumpId()
    {
        return $this->pumpId;
    }

    /**
     * @param mixed $pumpId
     */
    public function setPumpId($pumpId)
    {
        $this->pumpId = $pumpId;
    }

    /**
     * @return mixed
     */
    public function getPumpModel()
    {
        return $this->pumpModel;
    }

    /**
     * @param mixed $pumpModel
     */
    public function setPumpModel($pumpModel)
    {
        $this->pumpModel = $pumpModel;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param mixed $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return mixed
     */
    public function getSwipeOnly()
    {
        return $this->swipeOnly;
    }

    /**
     * @param mixed $swipeOnly
     */
    public function setSwipeOnly($swipeOnly)
    {
        $this->swipeOnly = $swipeOnly;
    }

    /**
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param mixed $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }


}