<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var Post
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Post", mappedBy="category")
     */
    private $posts;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Category
     */
    public function setName(string $name): ?Category
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Post
     */
    public function getPosts(): Post
    {
        return $this->posts;
    }

    /**
     * @param Post $posts
     * @return Category
     */
    public function setPosts(Post $posts): ?Category
    {
        $this->posts = $posts;
        return $this;
    }


}
