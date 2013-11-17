<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Store
 *
 * @Table(name="store")
 * @Entity
 */
class Store
{
    /**
     * @var integer
     *
     * @Column(name="id_store", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idStore;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="contact_phone", type="string", length=11, nullable=true)
     */
    private $contactPhone;

    /**
     * @var string
     *
     * @Column(name="district", type="string", length=45, nullable=true)
     */
    private $district;

    /**
     * @var string
     *
     * @Column(name="address", type="string", length=100, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @Column(name="contact_person", type="string", length=100, nullable=true)
     */
    private $contactPerson;

    /**
     * @var \Country
     *
     * @ManyToOne(targetEntity="Country")
     * @JoinColumns({
     *   @JoinColumn(name="country_id", referencedColumnName="country_id")
     * })
     */
    private $country;



    /**
     * Get idStore
     *
     * @return integer 
     */
    public function getIdStore()
    {
        return $this->idStore;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Store
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     * @return Store
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    
        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string 
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set district
     *
     * @param string $district
     * @return Store
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    
        return $this;
    }

    /**
     * Get district
     *
     * @return string 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Store
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set contactPerson
     *
     * @param string $contactPerson
     * @return Store
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    
        return $this;
    }

    /**
     * Get contactPerson
     *
     * @return string 
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Set country
     *
     * @param \Country $country
     * @return Store
     */
    public function setCountry(\Country $country = null)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return \Country 
     */
    public function getCountry()
    {
        return $this->country;
    }
}