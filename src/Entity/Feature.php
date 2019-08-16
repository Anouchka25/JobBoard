<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FeatureRepository")
 */
class Feature
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre1;

    /**
     * @ORM\Column(type="text")
     */
    private $description1;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre2;

    /**
     * @ORM\Column(type="text")
     */
    private $description2;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre3;

    /**
     * @ORM\Column(type="text")
     */
    private $description3;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre4;

    /**
     * @ORM\Column(type="text")
     */
    private $description4;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre5;

    /**
     * @ORM\Column(type="text")
     */
    private $description5;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre6;

    /**
     * @ORM\Column(type="text")
     */
    private $description6;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre1(): ?string
    {
        return $this->titre1;
    }

    public function setTitre1(string $titre1): self
    {
        $this->titre1 = $titre1;

        return $this;
    }

    public function getDescription1(): ?string
    {
        return $this->description1;
    }

    public function setDescription1(string $description1): self
    {
        $this->description1 = $description1;

        return $this;
    }

    public function getTitre2(): ?string
    {
        return $this->titre2;
    }

    public function setTitre2(string $titre2): self
    {
        $this->titre2 = $titre2;

        return $this;
    }

    public function getDescription2(): ?string
    {
        return $this->description2;
    }

    public function setDescription2(string $description2): self
    {
        $this->description2 = $description2;

        return $this;
    }

    public function getTitre3(): ?string
    {
        return $this->titre3;
    }

    public function setTitre3(string $titre3): self
    {
        $this->titre3 = $titre3;

        return $this;
    }

    public function getDescription3(): ?string
    {
        return $this->description3;
    }

    public function setDescription3(string $description3): self
    {
        $this->description3 = $description3;

        return $this;
    }

    public function getTitre4(): ?string
    {
        return $this->titre4;
    }

    public function setTitre4(string $titre4): self
    {
        $this->titre4 = $titre4;

        return $this;
    }

    public function getDescription4(): ?string
    {
        return $this->description4;
    }

    public function setDescription4(string $description4): self
    {
        $this->description4 = $description4;

        return $this;
    }

    public function getTitre5(): ?string
    {
        return $this->titre5;
    }

    public function setTitre5(string $titre5): self
    {
        $this->titre5 = $titre5;

        return $this;
    }

    public function getDescription5(): ?string
    {
        return $this->description5;
    }

    public function setDescription5(string $description5): self
    {
        $this->description5 = $description5;

        return $this;
    }

    public function getTitre6(): ?string
    {
        return $this->titre6;
    }

    public function setTitre6(string $titre6): self
    {
        $this->titre6 = $titre6;

        return $this;
    }

    public function getDescription6(): ?string
    {
        return $this->description6;
    }

    public function setDescription6(string $description6): self
    {
        $this->description6 = $description6;

        return $this;
    }
}
