<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Iphp\FileStoreBundle\Mapping\Annotation as FileStore;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ArticleRepository")
 * @FileStore\Uploadable
 * @ORM\HasLifecycleCallbacks
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="caption", type="string", length=255)
     */
    private $caption;

    /**
     * @Assert\File(maxSize="2M")
     * @FileStore\UploadableField(mapping="photo")
     * @ORM\Column(type="array", nullable=true)
     **/
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="annotation", type="text")
     */
    private $annotation;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    private $content;

    /**
     * @ORM\ManyToMany(targetEntity="Path")
     * @ORM\JoinTable(name="Article_Path",
     *      joinColumns={@ORM\JoinColumn(name="article_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="path_id", referencedColumnName="id")}
     *      )
     **/
    private $paths;

    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var datetime $updated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    private $updated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean")
     */
    private $published;

    /**
     * @var boolean
     *
     * @ORM\Column(name="recommended", type="boolean")
     */
    private $recommended;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;

    public function __construct()
    {
        $this->published = true;
        $this->deleted = false;
        $this->recommended = false;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set caption
     *
     * @param string $caption
     * @return Article
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get caption
     *
     * @return string 
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set photo
     *
     * @param array $photo
     * @return Article
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return array 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set annotation
     *
     * @param string $annotation
     * @return Article
     */
    public function setAnnotation($annotation)
    {
        $this->annotation = $annotation;

        return $this;
    }

    /**
     * Get annotation
     *
     * @return string 
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Article
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Article
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Article
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Article
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Add paths
     *
     * @param \AdminBundle\Entity\Path $paths
     * @return Article
     */
    public function addPath(\AdminBundle\Entity\Path $paths)
    {
        $this->paths[] = $paths;

        return $this;
    }

    /**
     * Remove paths
     *
     * @param \AdminBundle\Entity\Path $paths
     */
    public function removePath(\AdminBundle\Entity\Path $paths)
    {
        $this->paths->removeElement($paths);
    }

    /**
     * Get paths
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * Set recommended
     *
     * @param boolean $recommended
     * @return Article
     */
    public function setRecommended($recommended)
    {
        $this->recommended = $recommended;

        return $this;
    }

    /**
     * Get recommended
     *
     * @return boolean 
     */
    public function getRecommended()
    {
        return $this->recommended;
    }
}
