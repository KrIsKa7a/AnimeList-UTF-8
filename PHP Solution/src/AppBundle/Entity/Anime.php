<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Anime
 *
 * @ORM\Table(name="animes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnimeRepository")
 */
class Anime
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     * @NotBlank
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string")
     * @NotBlank
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string")
     * @NotBlank
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="watched", type="string")
     * @NotBlank
     */
    private $watched;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Anime
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param int $rating
     * @return Anime
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Anime
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
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
     * @return Anime
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getWatched()
    {
        return $this->watched;
    }

    /**
     * @param string $watched
     * @return Anime
     */
    public function setWatched($watched)
    {
        $this->watched = $watched;
        return $this;
    }
}

