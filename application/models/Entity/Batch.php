<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Batch
 *
 * @Table(name="batch")
 * @Entity
 */
class Batch
{
    /**
     * @var integer
     *
     * @Column(name="id_batch", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idBatch;

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
     * @var string
     *
     * @Column(name="rank_serie", type="string", length=20, nullable=true)
     */
    private $rankSerie;

    /**
     * @var \DateTime
     *
     * @Column(name="delivery_date", type="datetime", nullable=true)
     */
    private $deliveryDate;

    /**
     * @var string
     *
     * @Column(name="state", type="string", length=1, nullable=true)
     */
    private $state;

    /**
     * @var \Store
     *
     * @ManyToOne(targetEntity="Store")
     * @JoinColumns({
     *   @JoinColumn(name="id_store", referencedColumnName="id_store")
     * })
     */
    private $idStore;



    /**
     * Get idBatch
     *
     * @return integer 
     */
    public function getIdBatch()
    {
        return $this->idBatch;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Batch
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
     * @return Batch
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
     * Set rankSerie
     *
     * @param string $rankSerie
     * @return Batch
     */
    public function setRankSerie($rankSerie)
    {
        $this->rankSerie = $rankSerie;
    
        return $this;
    }

    /**
     * Get rankSerie
     *
     * @return string 
     */
    public function getRankSerie()
    {
        return $this->rankSerie;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     * @return Batch
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;
    
        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime 
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Batch
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set idStore
     *
     * @param \Store $idStore
     * @return Batch
     */
    public function setIdStore(\Store $idStore = null)
    {
        $this->idStore = $idStore;
    
        return $this;
    }

    /**
     * Get idStore
     *
     * @return \Store 
     */
    public function getIdStore()
    {
        return $this->idStore;
    }
}