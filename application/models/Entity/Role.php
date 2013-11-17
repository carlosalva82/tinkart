<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @Table(name="role")
 * @Entity
 */
class Role
{
    /**
     * @var integer
     *
     * @Column(name="id_role", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $idRole;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=25, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="description", type="string", length=50, nullable=true)
     */
    private $description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ManyToMany(targetEntity="Action", inversedBy="role")
     * @JoinTable(name="permission",
     *   joinColumns={
     *     @JoinColumn(name="role_id", referencedColumnName="id_role")
     *   },
     *   inverseJoinColumns={
     *     @JoinColumn(name="id_action", referencedColumnName="id_action")
     *   }
     * )
     */
    private $idAction;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAction = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idRole
     *
     * @return integer 
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Role
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
     * Set description
     *
     * @param string $description
     * @return Role
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
     * Add idAction
     *
     * @param \Action $idAction
     * @return Role
     */
    public function addIdAction(\Action $idAction)
    {
        $this->idAction[] = $idAction;
    
        return $this;
    }

    /**
     * Remove idAction
     *
     * @param \Action $idAction
     */
    public function removeIdAction(\Action $idAction)
    {
        $this->idAction->removeElement($idAction);
    }

    /**
     * Get idAction
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdAction()
    {
        return $this->idAction;
    }
}