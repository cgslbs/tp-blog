<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

// Tentative vaine d'envoyer l'auteur et la categorie directement à partir du back avec les Groups
// Mes Entity sont mal faites aussi parce que j'ai tout fait dans le désordre

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 * @ApiResource(
 *      collectionOperations={"get", "post"},
 *      itemOperations={"get", "put", "patch", "delete"},
 *      normalizationContext={"groups"={"article"}},
 * )
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"article"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article"})
     */
    private $titre;

    /**
     * @ORM\Column(type="text")
     * @Groups({"article"})
     */
    private $content;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"article"})
     */
    private $authorId;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"article"})
     */
    private $categorieId;

    /**
     * @ORM\Column(type="date")
     * @Groups({"article"})
     */
    private $publishedDate;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"article"})
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): self
    {
        $this->authorId = $authorId;

        return $this;
    }

    public function getCategorieId(): ?int
    {
        return $this->categorieId;
    }

    public function setCategorieId(int $categorieId): self
    {
        $this->categorieId = $categorieId;

        return $this;
    }

    public function getPublishedDate(): ?\DateTimeInterface
    {
        return $this->publishedDate;
    }

    public function setPublishedDate(\DateTimeInterface $publishedDate): self
    {
        $this->publishedDate = $publishedDate;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
