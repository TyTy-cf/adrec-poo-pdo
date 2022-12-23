<?php

class Country
{

    private int $id;

    private string $name;

    private string $nationality;

    private string $code;

    private string $url_flag;

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
     * @return Country
     */
    public function setId(int $id): Country
    {
        $this->id = $id;
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
     * @return Country
     */
    public function setName(string $name): Country
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->nationality;
    }

    /**
     * @param string $nationality
     * @return Country
     */
    public function setNationality(string $nationality): Country
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Country
     */
    public function setCode(string $code): Country
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrlFlag(): string
    {
        return $this->url_flag;
    }

    /**
     * @param string $url_flag
     * @return Country
     */
    public function setUrlFlag(string $url_flag): Country
    {
        $this->url_flag = $url_flag;
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
     * @return Country
     */
    public function setSlug(string $slug): Country
    {
        $this->slug = $slug;
        return $this;
    }

}