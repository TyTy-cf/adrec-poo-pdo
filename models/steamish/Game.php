<?php

class Game
{

    private int $id;

    private ?int $publisher_id;

    private string $name;

    private float $price;

    private string $published_at;

    private string $description;

    private string $thumbnail_cover;

    private ?string $thumbnail_logo;

    private string $slug;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Game
     */
    public function setId(int $id): Game
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPublisherId(): ?int
    {
        return $this->publisher_id;
    }

    /**
     * @param int|null $publisher_id
     * @return Game
     */
    public function setPublisherId(?int $publisher_id): Game
    {
        $this->publisher_id = $publisher_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Game
     */
    public function setName(string $name): Game
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Game
     */
    public function setPrice(float $price): Game
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublishedAt(): string
    {
        return $this->published_at;
    }

    /**
     * @param string $published_at
     * @return Game
     */
    public function setPublishedAt(string $published_at): Game
    {
        $this->published_at = $published_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Game
     */
    public function setDescription(string $description): Game
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailCover(): string
    {
        return $this->thumbnail_cover;
    }

    /**
     * @param string $thumbnail_cover
     * @return Game
     */
    public function setThumbnailCover(string $thumbnail_cover): Game
    {
        $this->thumbnail_cover = $thumbnail_cover;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getThumbnailLogo(): ?string
    {
        return $this->thumbnail_logo;
    }

    /**
     * @param string|null $thumbnail_logo
     * @return Game
     */
    public function setThumbnailLogo(?string $thumbnail_logo): Game
    {
        $this->thumbnail_logo = $thumbnail_logo;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return Game
     */
    public function setSlug(string $slug): Game
    {
        $this->slug = $slug;
        return $this;
    }

}