<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Card
 *
 * @Table(name="card")
 * @Entity
 */
class Card
{
    /**
     * @var integer
     *
     * @Column(name="id_card", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idCard;

    /**
     * @var string
     *
     * @Column(name="editor_code", type="string", length=40, nullable=true)
     */
    private $editorCode;

    /**
     * @var string
     *
     * @Column(name="link_code", type="string", length=10, nullable=true)
     */
    private $linkCode;

    /**
     * @var string
     *
     * @Column(name="title", type="string", length=30, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @Column(name="url_resource", type="text", nullable=true)
     */
    private $urlResource;

    /**
     * @var string
     *
     * @Column(name="resource_type", type="string", length=1, nullable=true)
     */
    private $resourceType;

    /**
     * @var string
     *
     * @Column(name="metadata", type="text", nullable=true)
     */
    private $metadata;

    /**
     * @var string
     *
     * @Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @Column(name="date_add", type="datetime", nullable=true)
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @Column(name="date_update", type="datetime", nullable=true)
     */
    private $dateUpdate;

    /**
     * @var \Template
     *
     * @ManyToOne(targetEntity="Template")
     * @JoinColumns({
     *   @JoinColumn(name="id_template", referencedColumnName="id_template")
     * })
     */
    private $idTemplate;

    /**
     * @var \User
     *
     * @ManyToOne(targetEntity="User")
     * @JoinColumns({
     *   @JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \Batch
     *
     * @ManyToOne(targetEntity="Batch")
     * @JoinColumns({
     *   @JoinColumn(name="id_batch", referencedColumnName="id_batch")
     * })
     */
    private $idBatch;



    /**
     * Get idCard
     *
     * @return integer 
     */
    public function getIdCard()
    {
        return $this->idCard;
    }

    /**
     * Set editorCode
     *
     * @param string $editorCode
     * @return Card
     */
    public function setEditorCode($editorCode)
    {
        $this->editorCode = $editorCode;
    
        return $this;
    }

    /**
     * Get editorCode
     *
     * @return string 
     */
    public function getEditorCode()
    {
        return $this->editorCode;
    }

    /**
     * Set linkCode
     *
     * @param string $linkCode
     * @return Card
     */
    public function setLinkCode($linkCode)
    {
        $this->linkCode = $linkCode;
    
        return $this;
    }

    /**
     * Get linkCode
     *
     * @return string 
     */
    public function getLinkCode()
    {
        return $this->linkCode;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Card
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
     * Set urlResource
     *
     * @param string $urlResource
     * @return Card
     */
    public function setUrlResource($urlResource)
    {
        $this->urlResource = $urlResource;
    
        return $this;
    }

    /**
     * Get urlResource
     *
     * @return string 
     */
    public function getUrlResource()
    {
        return $this->urlResource;
    }

    /**
     * Set resourceType
     *
     * @param string $resourceType
     * @return Card
     */
    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
    
        return $this;
    }

    /**
     * Get resourceType
     *
     * @return string 
     */
    public function getResourceType()
    {
        return $this->resourceType;
    }

    /**
     * Set metadata
     *
     * @param string $metadata
     * @return Card
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    
        return $this;
    }

    /**
     * Get metadata
     *
     * @return string 
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Card
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
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return Card
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;
    
        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     * @return Card
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;
    
        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime 
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * Set idTemplate
     *
     * @param \Template $idTemplate
     * @return Card
     */
    public function setIdTemplate(\Template $idTemplate = null)
    {
        $this->idTemplate = $idTemplate;
    
        return $this;
    }

    /**
     * Get idTemplate
     *
     * @return \Template 
     */
    public function getIdTemplate()
    {
        return $this->idTemplate;
    }

    /**
     * Set idUser
     *
     * @param \User $idUser
     * @return Card
     */
    public function setIdUser(\User $idUser = null)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return \User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idBatch
     *
     * @param \Batch $idBatch
     * @return Card
     */
    public function setIdBatch(\Batch $idBatch = null)
    {
        $this->idBatch = $idBatch;
    
        return $this;
    }

    /**
     * Get idBatch
     *
     * @return \Batch 
     */
    public function getIdBatch()
    {
        return $this->idBatch;
    }
}