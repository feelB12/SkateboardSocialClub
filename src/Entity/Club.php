<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ClubRepository;

/**
 * @ORM\Entity(repositoryClass=ClubRepository::class)
 */
class Club
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $title;

    /**
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * @ORM\Column(type="date")
     */
    private $madedAt;

    /**
     * @ORM\ManyToOne(targetEntity=Spot::class, inversedBy="clubs")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $spot;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $coverFilename;


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


    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getMadedAt(): ?\DateTimeInterface
    {
        return $this->madedAt;
    }

    public function setMadedAt(\DateTimeInterface $madedAt): self
    {
        $this->madedAt = $madedAt;

        return $this;
    }

    public function getSpot(): ?Spot
    {
        return $this->spot;
    }

    public function setSpot(?Spot $spot): self
    {
        $this->spot = $spot;

        return $this;
    }

    public function getCoverFilename(): ?string
    {
        return $this->coverFilename;
    }

    public function setCoverFilename(?string $coverFilename): self
    {
        $this->coverFilename = $coverFilename;

        return $this;
    }


}