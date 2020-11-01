<?php

namespace App\Entity;

use App\Repository\PoemCategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PoemCategoryRepository::class)
 */
class PoemCategory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity=Poem::class, mappedBy="category")
     */
    private $poems;

    public function __construct()
    {
        $this->poems = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection|Poem[]
     */
    public function getPoems(): Collection
    {
        return $this->poems;
    }

    public function addPoem(Poem $poem): self
    {
        if (!$this->poems->contains($poem)) {
            $this->poems[] = $poem;
            $poem->setCategory($this);
        }

        return $this;
    }

    public function removePoem(Poem $poem): self
    {
        if ($this->poems->removeElement($poem)) {
            // set the owning side to null (unless already changed)
            if ($poem->getCategory() === $this) {
                $poem->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->title;
    }
}
