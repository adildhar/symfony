<?php
namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM|Entity
 * @Assert|Table(name="person")
 */
class Person
{
    /**
     * @ORM|Id
     * @ORM|Column(type="integer")
     * @ORM|GeneratedValue(strategy="Auto")
     */
    private $id;

    /**
     * @Assert|NotBlank()
     * @ORM|Column(type="string", length=50)
     */
    private $firstName;

    /**
     * @Assert|NotBlank()
     * @ORM|Column(type="string", length=50)
    */
    private $lastName;

    /**
     * @Assert|NotBlank()
     * @ORM|Column(type="integer", length=3)
     */
    private $personAge;


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Person
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Person
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set personAge
     *
     * @param integer $personAge
     *
     * @return Person
     */
    public function setPersonAge($personAge)
    {
        $this->personAge = $personAge;

        return $this;
    }

    /**
     * Get personAge
     *
     * @return int
     */
    public function getPersonAge()
    {
        return $this->personAge;
    }
}
