<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Component
 *
 * @ORM\Table(name="component")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ComponentRepository")
 */
class Component
{
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="descripton", type="string", length=255)
     */
    private $description;




    /**
     * One Category has Many Categories.
     * @ORM\OneToMany(targetEntity="Component", mappedBy="parent_component")
     */
    private $children_component;

    /**
     * Many Categories have One Category.
     * @ORM\ManyToOne(targetEntity="Component", inversedBy="children_component")
     * @ORM\JoinColumn(name="parent_component_id", referencedColumnName="id")
     */
    private $parent_component;



    /**
     *
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="components")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $project;

    /**
     *
     *
     * @ORM\OneToMany(targetEntity="Part", mappedBy="component")
     */
    private $parts;


    public function __construct() {
        $this->children_component = new ArrayCollection();
        $this->parts = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getChildrenComponent()
    {
        return $this->children_component;
    }

    /**
     * @param mixed $children_component
     */
    public function setChildrenComponent($children_component)
    {
        $this->children_component = $children_component;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param mixed $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }



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
     * Set name
     *
     * @param string $name
     *
     * @return Component
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
     * @return mixed
     */
    public function getParentComponent()
    {
        return $this->parent_component;
    }

    /**
     * @param mixed $parent_component
     */
    public function setParentComponent($parent_component)
    {
        $this->parent_component = $parent_component;
    }

    /**
     * @return mixed
     */
    public function getParts()
    {
        return $this->parts;
    }

}

