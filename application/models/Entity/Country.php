<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @Table(name="country")
 * @Entity
 */
class Country
{
    /**
     * @var integer
     *
     * @Column(name="country_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $countryId;

    /**
     * @var integer
     *
     * @Column(name="iso_num", type="smallint", nullable=true)
     */
    private $isoNum;

    /**
     * @var string
     *
     * @Column(name="iso2", type="string", length=2, nullable=true)
     */
    private $iso2;

    /**
     * @var string
     *
     * @Column(name="iso3", type="string", length=3, nullable=true)
     */
    private $iso3;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=80, nullable=true)
     */
    private $name;



    /**
     * Get countryId
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set isoNum
     *
     * @param integer $isoNum
     * @return Country
     */
    public function setIsoNum($isoNum)
    {
        $this->isoNum = $isoNum;
    
        return $this;
    }

    /**
     * Get isoNum
     *
     * @return integer 
     */
    public function getIsoNum()
    {
        return $this->isoNum;
    }

    /**
     * Set iso2
     *
     * @param string $iso2
     * @return Country
     */
    public function setIso2($iso2)
    {
        $this->iso2 = $iso2;
    
        return $this;
    }

    /**
     * Get iso2
     *
     * @return string 
     */
    public function getIso2()
    {
        return $this->iso2;
    }

    /**
     * Set iso3
     *
     * @param string $iso3
     * @return Country
     */
    public function setIso3($iso3)
    {
        $this->iso3 = $iso3;
    
        return $this;
    }

    /**
     * Get iso3
     *
     * @return string 
     */
    public function getIso3()
    {
        return $this->iso3;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Country
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
}