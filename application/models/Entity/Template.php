<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Template
 *
 * @Table(name="template")
 * @Entity
 */
class Template
{
    /**
     * @var integer
     *
     * @Column(name="id_template", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idTemplate;

    /**
     * @var string
     *
     * @Column(name="title", type="string", length=80, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @Column(name="ranking", type="integer", nullable=true)
     */
    private $ranking;

    /**
     * @var string
     *
     * @Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @Column(name="create_date", type="datetime", nullable=true)
     */
    private $createDate;

    /**
     * @var \DateTime
     *
     * @Column(name="update_date", type="datetime", nullable=true)
     */
    private $updateDate;

    /**
     * @var float
     *
     * @Column(name="price", type="float", nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @Column(name="coin", type="string", length=10, nullable=true)
     */
    private $coin;

    /**
     * @var \Category
     *
     * @ManyToOne(targetEntity="Category")
     * @JoinColumns({
     *   @JoinColumn(name="id_category", referencedColumnName="id_category")
     * })
     */
    private $idCategory;



    /**
     * Get idTemplate
     *
     * @return integer 
     */
    public function getIdTemplate()
    {
        return $this->idTemplate;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Template
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Template
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set ranking
     *
     * @param integer $ranking
     * @return Template
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;
    
        return $this;
    }

    /**
     * Get ranking
     *
     * @return integer 
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Template
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Template
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    
        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return Template
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    
        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Template
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set coin
     *
     * @param string $coin
     * @return Template
     */
    public function setCoin($coin)
    {
        $this->coin = $coin;
    
        return $this;
    }

    /**
     * Get coin
     *
     * @return string 
     */
    public function getCoin()
    {
        return $this->coin;
    }

    /**
     * Set idCategory
     *
     * @param \Category $idCategory
     * @return Template
     */
    public function setIdCategory(\Category $idCategory = null)
    {
        $this->idCategory = $idCategory;
    
        return $this;
    }

    /**
     * Get idCategory
     *
     * @return \Category 
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }
}