<?php

namespace App\Entity;

use App\Application\Sonata\MediaBundle\Entity\Gallery;
use App\Application\Sonata\MediaBundle\Entity\Media;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostRepository")
 */
class Post
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
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $status = true;

    /**
     * @var Category
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="posts")
     * @ORM\JoinTable(name="category_post")
     */
    private $category;

    /**
     * @var Author
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Author", inversedBy="posts")
     */
    private $author;

    /**
     * @var Media
     *
     * @ORM\ManyToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Media", cascade={"persist"})
     */
    private $imagem;

    /**
     * @var Gallery
     *
     * @ORM\ManyToOne(targetEntity="App\Application\Sonata\MediaBundle\Entity\Gallery", cascade={"persist"})
     */
    private $galeria;

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
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Post
     */
    public function setTitle(string $title): ?Post
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Post
     */
    public function setContent(string $content): ?Post
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStatus(): ?bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     * @return Post
     */
    public function setStatus(bool $status): ?Post
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Category
     */
    public function getCategory(): ?PersistentCollection
    {
        return $this->category;
    }

    /**
     * @param Category $category
     * @return Post
     */
    public function setCategory(Category $category): ?Post
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return Author
     */
    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    /**
     * @param Author $author
     * @return Post
     */
    public function setAuthor(Author $author): Post
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return Media
     */
    public function getImagem(): ?Media
    {
        return $this->imagem;
    }

    /**
     * @param Media $imagem
     * @return Post
     */
    public function setImagem(Media $imagem): Post
    {
        $this->imagem = $imagem;
        return $this;
    }

    /**
     * @return Gallery
     */
    public function getGaleria(): ?Gallery
    {
        return $this->galeria;
    }

    /**
     * @param Gallery $galeria
     * @return Post
     */
    public function setGaleria(Gallery $galeria): Post
    {
        $this->galeria = $galeria;
        return $this;
    }





}
