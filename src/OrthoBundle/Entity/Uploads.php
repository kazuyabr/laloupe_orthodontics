<?php

namespace OrthoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Uploads
 */
class Uploads
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $photos;

    /* mon code */
    public $file;

    protected function getUploadDir()
    {
        return 'uploads';
    }

    /**
     * @return string
     */
    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../web/' .$this->getUploadDir();
    }
    public function getWebPath()
    {
        return null === $this->photos ? null : $this->getUploadDir().'/'.$this->photos;
    }

    public function getAbsolutePath()
    {
        return null === $this->photos ? null : $this->getUploadRootDir().'/'.$this->photos;
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
     * Set photos
     *
     * @param string $photos
     * @return Uploads
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Get photos
     *
     * @return string 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * @ORM\PrePersist
     */
    public function preUpload()

    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $this->photos = uniqid().'.'.$this->file->guessExtension();
        }
    }


    /**
     * @ORM\PostPersist
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->photos);

        unset($this->file);
    }

    /**
     * @ORM\PostRemove
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
}
